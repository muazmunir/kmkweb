<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    use HasFactory;
    // $table->string('title');
    // $table->string('description');
    // $table->string('presstitle');
    // $table->string('image');
    // $table->string('auther');
    // $table->string('target')->nullable() ;
    // $table->enum('public', array('public', 'hide'))->default('public');
    protected $fillabel =['title' , 'description', 'presstitle', 'image', 'auther', 'target', 'public'];
}
