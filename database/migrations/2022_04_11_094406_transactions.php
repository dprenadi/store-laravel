n<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Transactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            
            // $table->integer('users_id');
            $table->foreignId('users_id');
            $table->integer('inscurance_price');
            $table->integer('shipping_price');
            // $table->integer('cost');
            $table->integer('total_qty')->nullable();
            // $table->integer('net_price')->nullable();
            $table->string('courier')->nullable();
            $table->integer('total_price');
            $table->string('transaction_status');
            $table->string('code');
             // UNPAID/PENDING/SUCCESS/FAILED
            // $table->string('resi'); 

            $table->softDeletes();
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
        Schema::dropIfExists('transactions');
    }
}
