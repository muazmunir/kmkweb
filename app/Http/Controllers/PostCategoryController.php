<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\Firest ;
use App\Models\PostCategory ;

use App\Traits\MyImageUpload;
class PostCategoryController extends Controller
{
    use Firest ;
    use MyImageUpload ;
     //

     
    public function index (){
        $userId = Auth::check() ? Auth::id() : true; 
       
     $cats = $this->getpaginateData(PostCategory::class);
      //      Storage::disk('posts')->put('example.txt', 'mmdoh said upload2');
        return view('admin.category',[
            'user_id'=>$userId ,
            'cats'=>$cats

        ]);
    }
    public function categoryf (){
        $userId = Auth::check() ? Auth::id() : true; 
       
     $cats = $this->getpaginateData(PostCategory::class);
      //      Storage::disk('posts')->put('example.txt', 'mmdoh said upload2');
        return view('admin.categoryf',[
            'user_id'=>$userId ,
            'cats'=>$cats

        ]);
    }
    public function addCategory(Request $request){

        $catname = $request->catname;
        $puplish = $request->puplish;
        $parent = $request->parent;
        $add = new PostCategory ;
        $add->title= $catname ;
        $add->slug= $catname ;
        $add->puplish = $puplish ;
        $add->parent  = $parent;
        $add->save();
       // $image  = $this-> myimageUploads ($request,'photo','uploads','uploads') ;


        //   $filname =  $request->file('photo')->getClientOriginalName();
        //   $newname = time().'.'.$request->file('photo')->extension();
        // $savefile = $request->file('photo')->storeAs('',$newname,'posts');
        return back()->with('status',"Insert successfully");
    }

    public function updatecategory( $id){

        $userId = Auth::check() ? Auth::id() : true; 
        $cats = $this->getAllData(PostCategory::class);

        $getcat  = PostCategory::findOrFail($id);
        return view('admin.updatecategory',['cat'=>$getcat , 'cats'=>$cats, 'user_id'=>$userId ,]) ;


    }
    
    public function saveUpdatecategory(Request $request ,  $id){
        // $getcat  = PostCategory::findOrFail($id);
        $catname = $request->catname;
        $puplish = $request->puplish ?? 0;
        $parent = $request->parent;
        $add =   PostCategory::findOrFail($id) ;
        $add->title= $catname ;
        $add->slug= $catname ;
        $add->puplish = $puplish ;
        $add->parent  = $parent;
        $add->save();
        return back()->with('status',"تم التعديل بنجاح");
 
     }

     public function deletecategory(Request $request ,  $id){
        // $getcat  = PostCategory::findOrFail($id);
        $deleted = $request->delete;
        $add =   PostCategory::findOrFail($id) ;
        $add->deleted= $deleted ;
        $add->save();
       return back()->with('status',"تم التعديل بنجاح ");
 
     }
}
