<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\SellerAccountActivationMail;
use App\Mail\SellerAccountDeactivationMail;
use App\Models\City;
use App\Models\Seller;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SellerController extends Controller
{
    public function index()
    {
        $states = State::where('country_id', 101)->get();

        $stateIds = $states->pluck('id');

        $cities = City::whereIn('state_id', $stateIds)->get();

        $sellers = Seller::where('status', '0')->with('country', 'state', 'city')->paginate(9);
        return view('admin.seller.list', compact('sellers', 'states', 'cities'));
    }

    public function approval(Request $request)
    {
        if ($request->id) {
            $seller = Seller::where('id', $request->id);

            $seller->update(['status' => $request->status]);

            $sellerAccountId = $seller->first();

            if ($request->status == '1') {

                $sellerAccountMail = new SellerAccountActivationMail($sellerAccountId);

                Mail::to($sellerAccountId['email'])->send($sellerAccountMail);

            } else {

                $sellerAccountMail = new SellerAccountDeactivationMail($sellerAccountId);

                Mail::to($sellerAccountId['email'])->send($sellerAccountMail);
            }

        } else if ($request->ids) {

            $seller = Seller::whereIn('id', $request->ids);

            $seller->update(['status' => $request->status]);

            $sellerAccountIds = $seller->get();

            if ($request->status == '1') {
                foreach ($sellerAccountIds as $sellerSingleEmail) {
                    $sellerAccountMail = new SellerAccountActivationMail($sellerSingleEmail);
                    Mail::to($sellerSingleEmail['email'])->send($sellerAccountMail);
                }
            } else {
                foreach ($sellerAccountIds as $sellerSingleEmail) {
                    $sellerAccountMail = new SellerAccountDeactivationMail($sellerSingleEmail);
                    Mail::to($sellerSingleEmail['email'])->send($sellerAccountMail);
                }
            }
        }

        return response()->json();
    }

    public function searchSellerAccounts(Request $request)
    {
        $query = Seller::query();

        $query->where('status', '0');

        if ($request->post('states') !== null) {
            $query->whereIn('state_id', $request->post('states'));
        }

        if ($request->post('cities') !== null) {
            $query->orWhere('cities_id', $request->post('cities'));
        }

        $sellers = $query->with('country', 'state', 'city')->paginate(9);

        return view('admin.seller.render-seller-list', compact('sellers'))->render();
    }

    public function holdSeller()
    {
        $activeSellers = Seller::where('status', '1')->paginate(15);

        return view('admin.seller.hold-seller', compact('activeSellers'));
    }

    public function unHoldSeller()
    {
        $holdSellers = Seller::where('status', '1')->paginate(15);

        return view('admin.seller.unhold-seller', compact('holdSellers'));
    }
}
