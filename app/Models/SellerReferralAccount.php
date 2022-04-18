<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerReferralAccount extends Model
{
    use HasFactory;

    public $fillable = ['seller_id', 'sponsor_seller_id'];
}
