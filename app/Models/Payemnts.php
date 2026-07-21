<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payemnts extends Model
{
    use HasFactory;
    protected $fillable = ['product_id','user_id','phone','saller','paymethod','value','country',
    'ref','result','payid','crd','TranID','TrackID','Auth','session','deleted'];

}
