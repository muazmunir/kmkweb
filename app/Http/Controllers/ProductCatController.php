<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCat;
use Illuminate\Support\Facades\Auth;
use App\Traits\Firest ;
use App\Traits\MyImageUpload;

class ProductCatController extends Controller
{
    use Firest ;
    use MyImageUpload ;
     //

     
    public function index (){
        $userId = Auth::check() ? Auth::id() : true; 
       
     $cats = $this->getpaginateData(ProductCat::class);
        return view('admin.ProductCategory',[
            'user_id'=>$userId ,
            'cats'=>$cats

        ]);
    }
//
public static function getCategory ($id){
    $userId = Auth::check() ? Auth::id() : true; 
   
 $cats = ProductCat::findOrFail($id) ;
    return  $cats;
}
//



public function ProductCategoryform (){
    $userId = Auth::check() ? Auth::id() : true; 
   
 $cats = $this->getpaginateData(ProductCat::class);
    return view('admin.ProductCategoryform',[
        'user_id'=>$userId ,
        'cats'=>$cats

    ]);
}

    public function addCategory(Request $request){

        $catname = $request->catname;
        $puplish = $request->puplish;
        $parent = $request->parent;
        $add = new ProductCat ;
        $add->title= $catname ;
        $add->slug= $catname ;
        $add->puplish = $puplish ;
        $add->parent  = $parent;
        $add->save();
        return back()->with('status',"تمت الاضافة بنجاح");
    }

    public function updatecategory( $id){

        $userId = Auth::check() ? Auth::id() : true; 
        $cats = $this->getAllData(ProductCat::class);

        $getcat  = ProductCat::findOrFail($id);
        return view('admin.Productupdatecategory',['cat'=>$getcat , 'cats'=>$cats, 'user_id'=>$userId ,]) ;


    }
    
    public function saveUpdatecategory(Request $request ,  $id){
        // $getcat  = ProductCat::findOrFail($id);
        $catname = $request->catname;
        $puplish = $request->puplish ?? 0;
        $parent = $request->parent;
        $add =   ProductCat::findOrFail($id) ;
        $add->title= $catname ;
        $add->slug= $catname ;
        $add->puplish = $puplish ;
        $add->parent  = $parent;
        $add->save();
        return back()->with('status',"  تم التعديل بنجاح    ");
 
     }

     public function deletecategory(Request $request ,  $id){
        // $getcat  = ProductCat::findOrFail($id);
        $deleted = $request->delete;
        $add =   ProductCat::findOrFail($id) ;
        $add->deleted= $deleted ;
        $add->save();
       return back()->with('status',"  تم التعديل بنجاح    ");
 
     }
}
