<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;


class MyUsers extends Controller
{
    //
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    public function index(){
        $allusers = User::all();
        return view('admin.users',['allusers'=>$allusers]);
    }
}
