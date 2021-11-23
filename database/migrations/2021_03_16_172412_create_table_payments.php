<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('order_id'); 
            $table->unsignedBigInteger('ship_id')->nullable(); 
            $table->string('method');
            $table->boolean('status')->default(0);
            $table->double('amount',15,2);
            $table->string('payment_gateway',255)->nullable();
            $table->string('code_bank',255)->nullable();
            $table->text('payment_log',255)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
