<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_history', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('sub_title');
            $table->string('offer_start');
            $table->string('offer_end');
            $table->string('product_cat');
            $table->string('offer_cat');
            $table->longText('description')->nullable();
            $table->string('provider')->nullable();
            $table->string('promo_code')->nullable();
            $table->string('offer_note')->nullable();
            $table->string('price');
            $table->string('product_link');
            $table->string('affiliate_link')->nullable();
            $table->string('status');
            $table->unsignedBigInteger('user_id');
            $table->string('user_type');
            $table->string('product_id');
            $table->string('currency')->nullable()->default("BDT");
            $table->integer('page_visitor')->nullable();
            $table->timestamps();
            $table->engine = 'InnoDB'; 	
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_history');
    }
}
