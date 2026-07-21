<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin ;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;

class AdminController extends Controller
{

    
    //
    public function log()
    {
        return view('admin.layout');
    }


    public function index()
    {
        return view('admin.admin_login');
    }
    public function login(Request $request)
    {
        if (Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return redirect()->route('admin.dashboard');
        }
        return back()->with('error', 'danger alert For wrong Data');
    }
    public function dashboard()
    {
        return view('admin.index');
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login_form');
    }
    public function register()
    {
        //return view('admin.register');
            return "لقد اتبعت رابط فاسد "  ;
    }
    public function create(Request $request)
    {
        if (!Auth::guard('admin')->attempt([
            'email' => $request->email,
        
        ])) {
                $user =Admin::insert( [
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'password'=>Hash::make($request->password),
                       'created_at'=>Carbon::now(),
                
                    ]) ;

            return redirect()->route('login_form')->with('error', 'User created succefully ');
        }
        return back()->with('error', 'User Alredy exist');
    }

    
}
