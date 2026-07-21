<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\Http\Controllers\TopMenuController;
use App\Models\TopMenu;
class ContactUsController extends Controller
{
    // 'name',
    // 'email',
    // 'phone',
    // 'message'


    public function index(){

       $messages =  ContactUs::orderBy('id', 'DESC')->get();
       return view('admin.contact',['messages' =>$messages]);
    }
    public function contactf(){
                        $menu = TopMenuController::index();
                $subbutton =  TopMenu::where('public', 'public')->where('parent','!=', '0')->get();


                return view('contact',[
            'menu'=>$menu,
            'subbutton'=>$subbutton]);

    }
    public function addData(Request $request){
        $add = new ContactUs ;
         $add->name = $request->name ;
         $add->email = $request->email ;
         $add->phone = $request->phone ;
         $add->message = $request->message ;
           
        $add->save();

        return back()->with('status'," تم ارسال رسالتك بنجاح");

              //  return $request ;
    }
   

}
