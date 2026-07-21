<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TopMenu ;
use App\Traits\Firest ;
use App\Traits\MyImageUpload;


class TopMenuController extends Controller
{
    //
    use Firest ;
    use MyImageUpload ;

  
    public static  function index(){

    $menus =  TopMenu::where('public', 'public')->where('parent','=', '0')->get();
      return $menus ;
    }

    public function subbutton(){

        $subbutton =  TopMenu::where('public', 'public')->where('parent','!=', '0')->get();
          return $subbutton ;
        }

public function addmenuf (){
    $meuns =  TopMenu::paginate(12);
    $main =  TopMenu::where('public', 'public')->where('parent', '0')->get();
    
    return view('admin.addMenuf' ,['meuns'=>$meuns , 'main'=>$main] );
            } 




public function addNewamenu(Request $request){
//['title' , 'link', 'comment', 'parent', 'arrange', 'public'];
            $title       = $request->title;
            $puplish     = $request->public;
            $description = $request->comment;
            $target = $request->target;
            $parent = $request->parent;
            $arrange = $request->arrange;


            $add = new TopMenu ;
            if($title){ $add->title= $title ;}
            if($puplish){  $add->public= $puplish ;}
            if($description){  $add->comment= $description ;}
            if($target){$add->link= $target ;}
            if($parent){$add->parent= $parent ;}
            if($arrange){$add->arrange= $arrange ;}
            $add->save();
            return back()->with('status'," Menu Added Succesfully");

 
                                            }
 
       
  public function Updatemenuf($id){
           $slider =  TopMenu::findOrFail($id);
           $main =  TopMenu::where('public', 'public')->where('parent', '0')->get();

           return view('admin.addMenuUpdate',['slider'=>$slider, 'main'=>$main])  ;
     }
           

     
public function updatemenu($id ,Request $request){

    $title       = $request->title;
    $puplish     = $request->public;
    $description = $request->comment;
    $target = $request->target;
    $parent = $request->parent;
    $arrange = $request->arrange;

  $add =  TopMenu::findOrFail($id);
            if($title){ $add->title= $title ;}
            if($puplish){  $add->public= $puplish ;}
            if($description){  $add->comment= $description ;}
            if($target){$add->link= $target ;}
            if($parent){$add->parent= $parent ;}
            if($arrange){$add->arrange= $arrange ;}
            $add->save();
 
  return back()->with('status'," Slider Updates Succesfully");

          }

}
