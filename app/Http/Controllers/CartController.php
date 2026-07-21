<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\TopMenuController;
use App\Models\TopMenu;
use App\Models\Product;


class CartController extends Controller
{
    public function cartList()
    {
        
                        $menu = TopMenuController::index();
                $subbutton =  TopMenu::where('public', 'public')->where('parent','!=', '0')->get();
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('cart', ['cartItems'=>$cartItems ,
            'menu'=>$menu,
            'subbutton'=>$subbutton ]);
    }


    public function addToCart(Request $request)
    {
        
      
       $product = Product::findOrFail($request->id);

        \Cart::add([
            'id' => $request->id,
            'name' => $product->name,
            'price' => 1,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $product->image,
            )
        ]);
       // session()->flash('success', 'Product is Added to Cart Successfully !');
       $cartItems = \Cart::getContent();
        Session::put('cartcount', count($cartItems));
        if($request->has('fast') ){
            return redirect()->route('cart.list');
        }
      //  return $request ;
       // return redirect()->route('cart.list');
      return back()->with ('success', 'تم الاضافة للسلة بنجاح');
    }



    public function fastpay(Request $request)
    {
         $product = Product::findOrFail($request->id);

        \Cart::add([
            'id' => $request->id,
            'name' => $product->name,
            'price' => 1,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $product->image,
            )
        ]);
    
       // session()->flash('success', 'Product is Added to Cart Successfully !');
       $cartItems = \Cart::getContent();
        Session::put('cartcount', count($cartItems));
      return redirect()->route('cart.list');
    }



    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'تمت الإضافة الي السلة بنجاح');
        $cartItems = \Cart::getContent();
        Session::put('cartcount', count($cartItems));
        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'تم الحذف من السلة');
        $cartItems = \Cart::getContent();
        Session::put('cartcount', count($cartItems));
        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'تم افراغ السلة');
        $cartItems = \Cart::getContent();
        Session::put('cartcount', count($cartItems));
        return redirect()->route('cart.list');
    }



    public function  checkout(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'تم الحذف من السلة');
        $cartItems = \Cart::getContent();
        Session::put('cartcount', count($cartItems));
        return redirect()->route('cart.list');
    }
}