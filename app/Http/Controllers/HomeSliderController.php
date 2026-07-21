<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeSlider ;
use App\Traits\Firest ;
use App\Traits\MyImageUpload;

class HomeSliderController extends Controller
{

    use Firest ;
    use MyImageUpload ;


    public static  function index(){

    $sliders =  HomeSlider::where('public', 'public')->get();
      return $sliders ;
    }

public function addsliderf (){
    $sliders =  HomeSlider::paginate(12);

    return view('admin.addsliderf' ,['sliders'=>$sliders] );
            }




public function addNewaddslider(Request $request){

            $imag        = $this-> myimageUploads ($request,'photo','uploads','uploads') ;
            $title       = $request->title;
            $puplish     = $request->puplish;
            $description = $request->description;
            $presstitle     = $request->presstitle;
            $auther = "admin";
            $target = $request->target;
            $image       = 'uploads/'.$imag;
            $add = new HomeSlider ;
            if($title){ $add->title= $title ;}
            if($puplish){  $add->puplish= $puplish ;}
            if($description){  $add->description= $description ;}
            if($presstitle){  $add->presstitle= $presstitle ;}
            $add->target  = $target;
            if($image){$add->image= $image ;}
            $add->save();
            return back()->with('status'," Slider Added Succesfully");


                                            }


  public function Updatesliderf($id){
           $slider =  HomeSlider::findOrFail($id);
           return view('admin.addsliderupdate',['slider'=>$slider])  ;
     }



public function updateslider($id ,Request $request){

  $imag        = $this-> myimageUploads ($request,'photo','uploads','uploads') ;
  $title       = $request->title;
  $puplish     = $request->puplish;
  $description = $request->description;
  $presstitle     = $request->presstitle;
  $auther = "admin";
  $target = $request->target;
  $image       = 'uploads/'.$imag;

  $add =  HomeSlider::findOrFail($id);
  if($title){ $add->title= $title ;}
  if($puplish){  $add->puplish= $puplish ;}
  if($description){  $add->description= $description ;}
  if($presstitle){  $add->presstitle= $presstitle ;}
  $add->target  = $target;
  if($image){$add->image= $image ;}
  $add->save();
  return back()->with('status'," Slider Updates Succesfully");


                                  }

}
