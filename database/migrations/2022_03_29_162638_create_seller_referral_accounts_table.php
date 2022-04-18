<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerReferralAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_referral_accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seller_id')->index()->nullable();
            $table->unsignedBigInteger('sponsor_seller_id')->index()->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('seller_id')->references('id')->on('sellers');
            $table->foreign('sponsor_seller_id')->references('id')->on('sellers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seller_referral_accounts');
    }
}
