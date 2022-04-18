<?php

use App\Http\Controllers\admin\auth\LoginController;
use App\Http\Controllers\admin\auth\RegistrationController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\ProductApprovalController;
use App\Http\Controllers\admin\SellerController;
use App\Http\Controllers\admin\RolePermissionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function () {
        Route::get('register', [RegistrationController::class, 'index'])->name('register');
        Route::get('login', [LoginController::class, 'index'])->name('login');
        Route::post('register', [RegistrationController::class, 'adminRegister'])->name('admin-register');
        Route::post('login', [LoginController::class, 'adminValidate'])->name('admin-login');
    });

    Route::middleware(['auth:admin', 'PreventBackHistory'])->group(function () {
        Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');

        Route::prefix('category')->name('category.')->group(function () {
            Route::get('/', [CategoryController::class, 'index'])->name('index');
            Route::post('main/create', [CategoryController::class, 'categoryMainCreate'])->name('main.create');
            Route::post('sub/create', [CategoryController::class, 'categorySubCreate'])->name('sub.create');
            Route::post('sub1/create', [CategoryController::class, 'categorySub1Create'])->name('sub1.create');
            Route::get('subcategory', [CategoryController::class, 'subcategory'])->name('subcategory');
            Route::get('subcategory1', [CategoryController::class, 'subcategory1'])->name('subcategory1');
            Route::get('tree/{id}', [CategoryController::class, 'tree'])->name('tree');
        });

        Route::group(['prefix' => 'product_approval', 'as' => 'product_approval.'], function () {
            Route::get('/single_product_listing', [ProductApprovalController::class, 'index'])->name('index');
            Route::post('store', [ProductController::class, 'store'])->name('store');
            Route::get('qc_process', [ProductApprovalController::class, 'qcProcess'])->name('qcProcess');
            Route::post('qc_process', [ProductApprovalController::class, 'qcProcessSubmit'])->name('qcProcess.submit');
            Route::get('qc_error', [ProductApprovalController::class, 'qcError'])->name('qcError');
            Route::get('qc_failed', [ProductApprovalController::class, 'qcFailed'])->name('qcFailed');
            Route::get('qc_pass', [ProductApprovalController::class, 'qcPass'])->name('qcPass');
            Route::post('qcPendingToProgress', [ProductApprovalController::class, 'qcPendingToProgress'])->name('qcPendingToProgress');
        });

        Route::group(['prefix' => 'seller', 'as' => 'seller.'], function () {
            Route::get('/approval', [SellerController::class,'index'])->name('index');
            Route::post('/approval', [SellerController::class,'approval'])->name('approval');
            Route::get('/hold-seller', [SellerController::class,'holdSeller'])->name('hold-seller');
            Route::get('/un-hold-seller', [SellerController::class,'unHoldSeller'])->name('un-hold-seller');

            Route::post('/account-search', [SellerController::class,'searchSellerAccounts'])->name('account-search');
        });

        Route::group(['prefix'=>'role', 'as'=>'role.'], function () {
            Route::get('/',          [RolePermissionController::class, 'index'])->name('index');
            Route::get('create',     [RolePermissionController::class, 'create'])->name('create');
            Route::post('store',     [RolePermissionController::class, 'store'])->name('store');
            Route::get('edit/{id}',  [RolePermissionController::class, 'edit'])->name('edit');
            Route::post('update',    [RolePermissionController::class, 'update'])->name('update');
            Route::delete('destroy', [RolePermissionController::class, 'destroy'])->name('destroy');

            Route::get('create_permission', [RolePermissionController::class, 'createPermission'])->name('createPermission');
        });
    });
});
