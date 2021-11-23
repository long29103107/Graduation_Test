<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('users', function (Blueprint $table) {
        //     $table->foreign('role_id')->references('id')->on('roles');
        // });
        // Schema::table('wishlists', function (Blueprint $table) {
        //     $table->foreign('user_id')->references('id')->on('users');
        //     $table->foreign('product_id')->references('id')->on('products');
        // });
        // Schema::table('comments', function (Blueprint $table) {
        //     $table->foreign('user_id')->references('id')->on('users');
        //     $table->foreign('product_id')->references('id')->on('products');
        //     $table->foreign('parent_id')->references('id')->on('comments');
        // });
        // Schema::table('product_tags', function (Blueprint $table) {
        //     $table->foreign('tag_id')->references('id')->on('tags');
        //     $table->foreign('product_id')->references('id')->on('products');
        // });
        // Schema::table('products', function (Blueprint $table) {
        //     $table->foreign('category_id')->references('id')->on('categories');
        // });
        // Schema::table('discounts', function (Blueprint $table) {
        //     $table->foreign('user_id')->references('id')->on('users');
        //     $table->foreign('product_id')->references('id')->on('productSs');
        // });
        // Schema::table('product_details', function (Blueprint $table) {
        //     $table->foreign('size_id')->references('id')->on('sizes');
        //     $table->foreign('color_id')->references('id')->on('colors');
        //     $table->foreign('product_id')->references('id')->on('products');
        // });
        // Schema::table('order_details', function (Blueprint $table) {
        //     $table->foreign('order_id')->references('id')->on('orders');
        //     $table->foreign('product_detail_id')->references('id')->on('product_details');
        //     $table->foreign('discount_id')->references('id')->on('discounts');
        // });
        // Schema::table('payments', function (Blueprint $table) {
        //     $table->foreign('order_id')->references('id')->on('orders');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_key');
    }
}
