<?php

namespace App\Traits;

use http\Client\Request;
use Illuminate\Support\Carbon;
use Image;

trait MyImageUpload
{
    public function myimageUploads ($request,$file,$driver,$dir){

    //     <div class="form-group">
    //     <label for="exampleFormControlFile1">Example file input</label>
    //     <input type="file" class="form-control-file"  name="photo" id="photo">
    //   </div>

  // $image  = $this-> myimageUploads ($request,'photo','uploads','uploads') ;


        $now = Carbon::now();
        $year =  $now->year;
        $month = $now->month;
        $day = $now->day;
        $filname =  $request->file($file)->getClientOriginalName();
        $dirs = $dir."/". $year."/". $month."/".$day ;
        $newname = time().'.'.$request->file($file)->extension();
        $savefile = $request->file($file)->storeAs($dirs,$newname,$driver);
      
        return $savefile ;
    }
}
