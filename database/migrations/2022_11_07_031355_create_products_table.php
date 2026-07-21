<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('category_id');
            $table->string('name');
            $table->double('price');
            $table->string('image');
            $table->string('auther');
            $table->text('description');
            $table->dateTime('start')->nullable() ;
            $table->dateTime('end')->nullable() ;
            $table->integer('target')->default(0)->nullable() ;
            $table->enum('public', array('public', 'private'))->default('public');
            $table->string('puplish')->default(0);
            $table->string('att1')->default(0);
            $table->string('att2')->default(0);
            $table->string('att3')->default(0);
            $table->string('att4')->default(0);
            $table->string('att5')->default(0);
            $table->string('att6')->default(0);
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
        Schema::dropIfExists('products');
    }
}
