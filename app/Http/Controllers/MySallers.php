<?php

namespace App\Http\Controllers;
use App\Models\Saller;

use Illuminate\Http\Request;

class MySallers extends Controller
{
    //
    public function index(){
        $allusers = Saller::all();
        return view('admin.sallers',['allusers'=>$allusers]);
    }
}
