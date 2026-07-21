<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayemntsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payemnts', function (Blueprint $table) {
            $table->id();
            $table->string('product_id');
            $table->string('user_id');
            $table->string('saller');
            $table->string('paymethod')->nullable();
            $table->string('value');
            $table->text('country')->nullable();
            $table->string('ref')->nullable() ;
            $table->string('result')->nullable() ;
            $table->string('payid')->default(0)->nullable();
            $table->string('crd')->default(0)->nullable();
            $table->string('TranID')->default(0)->nullable();
            $table->string('TrackID')->default(0)->nullable();
            $table->string('Auth')->default(0)->nullable();
            $table->string('session')->default(0)->nullable();
            $table->boolean('deleted')->default(0)->nullable() ;
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
        Schema::dropIfExists('payemnts');
    }
}
