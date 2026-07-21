<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Traits\Firest ;
 use App\Models\ProductCat;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class Pages extends Controller
{    use Firest ;

    public function index(){

        
        $posts = $this->getAllData(Product::class);
      //      Storage::disk('posts')->put('example.txt', 'mmdoh said upload2');
        return view('home',[
            'posts'=>$posts,
        ]);
    }


    public function addToCart(Request $request){
   Session::flush();
        if (Session::has('cartproducts')){
        foreach(Session::get('cartproducts') as $y){
            if($y[0]==$request->productId ){
                 dd("in equal ");
                }
                else {
                //  dd("in not equal equal ");
                Session::push('cartproducts',[$request->productId,$request->value]);
              }  
                  }
       }else{
        Session::push('cartproducts',[$request->productId,$request->value]);
       }

 

     //    dd(Session::all());
        return redirect('/home')->with('status'," Added to cart Succesfuly");
    }

}
