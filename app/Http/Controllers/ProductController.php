<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\Firest ;
use App\Traits\MyImageUpload;
use App\Models\ProductCat;
use App\Models\Product;
class ProductController extends Controller
{
    use Firest ;
    use MyImageUpload ;


    public function index(){

        $userId = Auth::check() ? Auth::id() : true;
         $cats = $this->getAllData(ProductCat::class);
         $currentUserInfo = $this->getLocaton();
     $posts =Product::where('deleted','=',0)->paginate(12);
      //      Storage::disk('posts')->put('example.txt', 'mmdoh said upload2');
        return view('admin.Products',[
            'user_id'=>$userId ,
            'cats'=>$cats ,
            'posts'=>$posts,
            'currentUserInfo'=>$currentUserInfo
        ]);
    }





    public function ProductsDeleted(){

        $userId = Auth::check() ? Auth::id() : true;
         $cats = $this->getAllData(ProductCat::class);
         $currentUserInfo = $this->getLocaton();
     $posts = Product::where('deleted','=',1)->paginate(12);
      //      Storage::disk('posts')->put('example.txt', 'mmdoh said upload2');
        return view('admin.Products',[
            'user_id'=>$userId ,
            'cats'=>$cats ,
            'posts'=>$posts,
            'currentUserInfo'=>$currentUserInfo
        ]);
    }
/////cart list


public static  function producty($number)
    {
        /// category name  =cateTitle


      $products =  Product::where('products.puplish', 1)
      ->orderBy('id', 'desc')
      ->select(['products.*'])
     ->paginate($number);
    return $products ;
    }


public function productList()
    {
      $products =  $this->getpaginateData(Product::class);
       // $products = Product::all();

        return view('products', compact('products'));
    }

    /////


    public static function showProduct($id){

        $userId = Auth::check() ? Auth::id() : true;


     $product = Product::findOrFail($id);
        return $product;
    }


    //////

    public function Productsf(){

        $userId = Auth::check() ? Auth::id() : true;
         $cats = $this->getAllData(ProductCat::class);
         $currentUserInfo = $this->getLocaton();
     $posts = $this->getAllData(Product::class);
      //      Storage::disk('posts')->put('example.txt', 'mmdoh said upload2');
        return view('admin.Productsf',[
            'user_id'=>$userId ,
            'cats'=>$cats ,
            'posts'=>$posts,
            'currentUserInfo'=>$currentUserInfo
        ]);
    }
    public function addNewPost(Request $request){


        //  ['category_id','title','image','auther','content','puplish',
        //                   'start','end','target','public','att1','att2','att3','att4','att5','att6','deleted'
        //                     ];

        $imag  = $this-> myimageUploads ($request,'photo','uploads','uploads') ;
        $category_id= $request->category_id;
        $title = $request->title;
        $image= 'uploads/'.$imag;
        $auther = Auth::check() ? Auth::id() : true;
        $content = $request->content;
        $puplish = $request->puplish;
        $start = date('Y-m-d H:i:s', strtotime($request->start ));
        $end  =  date('Y-m-d H:i:s', strtotime($request->end ));
        $target  = $request->target;
        $public  = $request->public ;
        $price = $request->price ;
        $att1 = $request-> att1;
        $att2  = $request->att2 ;
        $att3  = $request->att3 ;
        $att4  = $request->att4 ;
        $att5  = $request->att5;
        $att6  = $request->att6 ;
        $parent = $request->parent;


        $add = new Product ;
        if($category_id){$add->category_id  = $category_id;}
        if($title){ $add->name= $title ;}
        if($image){$add->image= $image ;}
        if($auther){$add->auther= $auther ;}
        if($content){$add->description  = $content;}
        if($puplish){  $add->puplish= $puplish ;}
        if($price){  $add->price= $price ;}

        if($start ){  $add->start = $start  ;}
        if( $end){  $add->end = $end  ;}
        if($target ){  $add->target = $target  ;}
        if($public ){  $add->public = $public  ;}
        if($public ){  $add->public = $public  ;}
        if($att1 ){  $add->att1 = $att1  ;}
        if($att2 ){  $add->att2 = $att2  ;}
        if($att3 ){  $add->att3 = $att3  ;}
        if($att4 ){  $add->att4 = $att4  ;}
        if($att5 ){  $add->att5 = $att5  ;}
        if($att6 ){  $add->att6 = $att6  ;}
        if($parent ){  $add->parent = $parent  ;}


        $add->save();



         return back()->with('status'," Product  Insert successfully");
    }


    public function updatePost( $id){

        $userId = Auth::check() ? Auth::id() : true;
        $post = Product::findOrFail($id);
        $posts = $this->getAllData(Product::class);
        $cats = $this->getAllData(ProductCat::class);
        $getcat  = Product::findOrFail($id);


        return view('admin.ProductsupdatePost',['post'=>$post ,'cat'=>$getcat ,  'user_id'=>$userId ,'cats'=>$cats ,'posts'=>$posts]) ;


    }

    public function saveUpdatePost(Request $request ,  $id){
        $image ="";
        if ($request->photo){
            $imag  = $this-> myimageUploads ($request,'photo','uploads','uploads') ;
            $image= 'uploads/'.$imag;
        }
        $category_id= $request->category_id;
        $title = $request->title;
        $auther = Auth::check() ? Auth::id() : true;
        $content = $request->content;
        $puplish = $request->puplish;
        $price = $request->price ;
        $start = date('Y-m-d H:i:s', strtotime($request->start ));
        $end  =  date('Y-m-d H:i:s', strtotime($request->end ));
        $target  = $request->target;
        $public  = $request->public ;
        $att1 = $request-> att1;
        $att2  = $request->att2 ;
        $att3  = $request->att3 ;
        $att4  = $request->att4 ;
        $att5  = $request->att5;
        $att6  = $request->att6 ;
        $parent = $request->parent;

        $add = Product::findOrFail($id);
        if($category_id){$add->category_id  = $category_id;}
        if($title){ $add->name= $title ;}
        if($image){$add->image= $image ;}
        if($auther){$add->auther= $auther ;}
        if($content){$add->description  = $content;}

        if($price){  $add->price= $price ;}
        if($start ){  $add->start = $start  ;}
        if( $end){  $add->end = $end  ;}
        if($target ){  $add->target = $target  ;}
        if($public ){  $add->public = $public  ;}
        if($att1 ){  $add->att1 = $att1  ;}
        if($att2 ){  $add->att2 = $att2  ;}
        if($att3 ){  $add->att3 = $att3  ;}
        if($att4 ){  $add->att4 = $att4  ;}
        if($att5 ){  $add->att5 = $att5  ;}
        if($att6 ){  $add->att6 = $att6  ;}
        if($parent ){  $add->parent = $parent  ;}
        if($puplish !=""){ $add->puplish = $puplish;}

        $add->save();



        return back()->with('status',"تم التعديل بنجاح  ");
    }




     public function deletePost(Request $request ,  $id){
        // $getcat  = ProductCatController::findOrFail($id);
        $deleted = $request->delete;
        $add =   Product::findOrFail($id) ;
        $add->deleted= $deleted ;
        $add->save();
       return back()->with('status',"تم التعديل بنجاح  ");

     }
}
