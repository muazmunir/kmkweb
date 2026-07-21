<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductCatController;
use App\Http\Controllers\HomeSliderController ;
use App\Models\Post;
use App\Traits\Firest ;
use App\Models\Product;
use PhpParser\Node\Stmt\Return_;
use Session;
use App\Http\Controllers\TopMenuController;
use App\Models\TopMenu;
class MainPageController extends Controller
{
    //
use Firest ;
    public function index($id=null,$saller=1){
                $menu = TopMenuController::index();
                $subbutton =  TopMenu::where('public', 'public')->where('parent','!=', '0')->get();


        if ($saller != 1){

            Session::put('saller',$saller);
            $sa = Session::get('saller') ;


  }
            if($saller == 1){

                Session::put('saller',$saller);
                $sa = Session::get('saller') ;

            }



        $product = [];
        $getcat = "";
        $number = 12 ;
        $products = ProductController::producty($number);
        $posts  =   PostController::posts($number);
        if($id !=null){
            $product   =   ProductController::showProduct($id);
            $getcat  = ProductCatController::getCategory($product->category_id);
        }
        $sliders =  HomeSliderController::index();



         return view(
           'main' ,
        [
            'products' =>  $products ,
            'posts'    =>  $posts,
            'product' =>$product,
            'getcat' =>$getcat,
            'sliders' => $sliders,
            'menu'=>$menu,
            'subbutton'=>$subbutton
        ]
        );
    }

//////auto complite search
public function autocompleteSearch(Request $request)
{
      $query = $request->get('query');
      $filterResult = Product::where('name', 'LIKE', '%'. $query. '%')->get();
      return response()->json($filterResult);
}






public static function post($id=null){
    $menu = TopMenuController::index();
    $subbutton =  TopMenu::where('public', 'public')->where('parent','!=', '0')->get();
    $post  =   PostController::showpost($id);
    $recent =  PostController::posts(3);
    $products = [];
   if(!$id){
    $products = ProductController::producty(8);

   }

    return view('post',['post'=>$post , 'recent'=>$recent ,'products' =>$products, 'menu'=>$menu,
            'subbutton'=>$subbutton]) ;
}



public static function producties(){
         $menu = TopMenuController::index();
     $subbutton =  TopMenu::where('public', 'public')->where('parent','!=', '0')->get();
    $posts  =   PostController::posts(0);
    $products = ProductController::producty(9);

  return view('pro',['products' =>$products,'posts'    =>  $posts,'menu'=>$menu,
            'subbutton'=>$subbutton]) ;
}


public function donation(){
    $menu = TopMenuController::index();
$subbutton =  TopMenu::where('public', 'public')->where('parent','!=', '0')->get();
$posts  =   PostController::posts(0);
$products = ProductController::producty(9);

return view('donation',['products' =>$products,'posts'    =>  $posts,'menu'=>$menu,
       'subbutton'=>$subbutton]) ;
}

public function donations(Request $request){
    dd($request);
    $menu = TopMenuController::index();
$subbutton =  TopMenu::where('public', 'public')->where('parent','!=', '0')->get();
$posts  =   PostController::posts(0);
$products = ProductController::producty(9);

return view('donation',['products' =>$products,'posts'    =>  $posts,'menu'=>$menu,
       'subbutton'=>$subbutton]) ;
}


public function posts(){
         $menu = TopMenuController::index();
     $subbutton =  TopMenu::where('public', 'public')->where('parent','!=', '0')->get();

    $posts  =   Post::where('puplish', 1)->where('category_id','!=', '1')->orderBy('id', 'desc')->paginate(9);;
    $products = ProductController::producty(0);

  return view('posts',['products' =>$products,'posts'    =>  $posts,'menu'=>$menu,
            'subbutton'=>$subbutton]) ;
}

}
