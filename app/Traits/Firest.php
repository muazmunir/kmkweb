<?php
namespace App\Traits ;
use Stevebauman\Location\Facades\Location;

use GuzzleHttp\Psr7\Request;

trait Firest {

    public function getAllData($model){

        return $model::all();
    }

    public function getpaginateData($model){

        return $model::orderBy('created_at', 'DESC')->paginate(12);
    }


    ///// get location 
    public function getLocaton(){
   $ip =  $_SERVER['REMOTE_ADDR'];  
 //$ip = '162.159.24.227'; /* Static IP address */
 $currentUserInfo = Location::get($ip);
   
 return  $currentUserInfo;


    }

}