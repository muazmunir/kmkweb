<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\Firest ;
use App\Traits\MyImageUpload;
use App\Models\Post;
use App\Models\PostCategory ;

class PostController extends Controller
{
    use Firest ;
    use MyImageUpload ;


    public static  function index(){

        $userId = Auth::check() ? Auth::id() : true;
        $cats = PostCategory::all();

     $posts = Post::where('deleted','=',0)->paginate(12);
      //      Storage::disk('posts')->put('example.txt', 'mmdoh said upload2');
        return view('admin.allposts',[
            'user_id'=>$userId ,
            'cats'=>$cats ,
            'posts'=>$posts

        ]);
    }
    public  function deletedPosts(){

        $userId = Auth::check() ? Auth::id() : true;
        $cats = PostCategory::all();

     $posts = Post::where('deleted','=',1)->paginate(12);
      //      Storage::disk('posts')->put('example.txt', 'mmdoh said upload2');
        return view('admin.alldeleyedposts',[
            'user_id'=>$userId ,
            'cats'=>$cats ,
            'posts'=>$posts

        ]);
    }
    public static  function posts($number ){

        $userId = Auth::check() ? Auth::id() : true;
        $cats = PostCategory::all();

     $posts = Post::where('category_id','!=','1')->paginate($number);
      //      Storage::disk('posts')->put('example.txt', 'mmdoh said upload2');
        return $posts;
    }



    public static function showpost($id){

        $userId = Auth::check() ? Auth::id() : true;
        $cats = PostCategory::all();

     $post = Post::findOrFail($id);
        return $post;
    }


    public function addNewPostform(){

        $userId = Auth::check() ? Auth::id() : true;
        $cats = $this->getAllData(PostCategory::class);

     $posts = $this->getAllData(Post::class);
      //      Storage::disk('posts')->put('example.txt', 'mmdoh said upload2');
        return view('admin.addNewPostform',[
            'user_id'=>$userId ,
            'cats'=>$cats ,
            'posts'=>$posts

        ]);
    }


    public function addNewPost(Request $request){
         $auther = Auth::check() ? Auth::id() : true;

        $imag  = $this-> myimageUploads ($request,'photo','uploads','uploads') ;

        $title = $request->title;
        $puplish = $request->puplish;
        $parent = $request->parent;
        $content = $request->content;
        $category_id= $request->category_id;
        $image='uploads/'.$imag;

        $add = new Post ;
        if($category_id){$add->category_id  = $category_id;}
        if($title){ $add->title= $title ;}
        if($image){$add->image= $image ;}
        if($auther){$add->auther= $auther ;}
        if($content){$add->content  = $content;}
        if($puplish){  $add->puplish= $puplish ;}

        $add->save();



         return back()->with('status'," Posts Insert successfully");
    }


    public function updatePost($id){

      $userId = Auth::check() ? Auth::id() : true;
        $post = Post::find($id);
         $posts = $this->getAllData(Post::class);
          $cats = $this->getAllData(PostCategory::class);
        // $getcat  = PostCategory::findOrFail($id);
       return view('admin.updatePost',['post'=>$post ,  'user_id'=>$userId ,'cats'=>$cats ,'posts'=>$posts]) ;

    }

    public function saveUpdatePost(Request $request ,  $id){
        $auther = Auth::check() ? Auth::id() : true;
        $imag  = "";
            if($request->photo){
                $imag  = $this-> myimageUploads ($request,'photo','uploads','uploads') ;
                $image= 'uploads/'.$imag;
            }


        $title = $request->title;
        $puplish = $request->puplish;
        $parent = $request->parent;
        $content = $request->content;
        $category_id= $request->category_id;


        $add = Post::findOrFail($id);
        if($category_id){$add->category_id  = $category_id;}
        if($title){ $add->title= $title ;}
        if($request->photo){$add->image= $image ;}
        if($auther){$add->auther= $auther ;}
        if($content){$add->content  = $content;}
        if($puplish){  $add->puplish= $puplish ;}
        $add->save();

        return back()->with('status'," تم التعديل بنجاح  ");

     }




     public function deletePost(Request $request ,  $id){
        // $getcat  = PostCategory::findOrFail($id);
        $deleted = $request->delete;
        $add =   Post::findOrFail($id) ;
        $add->deleted= $deleted ;
        $add->save();
       return back()->with('status',"Trashed   Sucessfuly  ");

     }
}

