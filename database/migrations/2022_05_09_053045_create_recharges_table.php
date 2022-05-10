<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRechargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recharges', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('mobile_no');
            $table->string('amount');
            $table->string('operator')->nullable();
            $table->string('order_id')->nullable();
            $table->string('opr_txn_id')->nullable();
            $table->string('status_code')->nullable();
            $table->string('request_id')->nullable();
            $table->string('message')->nullable();
            $table->string('status')->nullable();
            $table->string('open_balance')->nullable();
            $table->string('charged_amount')->nullable();
            $table->string('close_balance')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recharges');
    }
}
