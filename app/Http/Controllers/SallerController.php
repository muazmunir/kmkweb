<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Saller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Traits\Firest ;
use App\Traits\MyImageUpload;
use App\Models\ProductCat;
use App\Models\Product;
use App\Models\Payemnts ;
  use Illuminate\Support\Facades\Storage;

class SallerController extends Controller
{
    use Firest ;
    use MyImageUpload ;

    //
    public function index()
    {
        return view('saller.login_form');
    }

    public function login(Request $request)
    {
        if (Auth::guard('saller')->attempt([
            'email' => $request->email,
            'password' => $request->password,
            'status'=> 0
        ])) {
            return redirect()->route('saller.payments');
        }
        return back()->with('error', 'danger alert For wrong Data');
    }




    public function register()
    {
        return view('saller.register');
    }

    public function create(Request $request)
    {
        // $cr = Saller::findOrFail(1);
        $cr = Saller::where('email','=',$request->email)->get();
     if (count($cr)==0){
            $create = Saller::create([
                'name' =>$request->name  ,
                'email' =>$request->email  ,
                'password'=>Hash::make($request->password) ,
                'created_at'=>Carbon::now() ,
            ]);
            $create->save();
            return back()->with('status','تم انشاء المستخدم بنجاح');
       }
      else{
           return back()->with('error',' المستخدم موجود بالفعل ');

        }
    }



    public function stopsaller(Request $request)
    {
        $id = $request->id ;
        $status =  $request->status ;

       $up = Saller::where('id','=' ,$id)->first();
       $up->status = $status ;
       $up->save();
        return back()->with('status','تم تعديل  المستخدم بنجاح');
    }


    public function dashboard()
    {
        return view('saller.index');
    }

    public function logout(){
        Auth::guard('saller')->logout();
        return redirect()->route('login');
    }



    public function max()
    {
        return view('saller.index');
    }

//// admin auto login
public function adminautologin(Request $request){

$sallerId = $request->id ;
    Auth::guard('saller')->loginUsingId($sallerId);
    //'saller.products'
    return redirect()->route('saller.products');}

////////saller products
public function sallerProduct(){

    $userId = Auth::guard('saller')->check() ? Auth::guard('saller')->id() : true;
     $cats = $this->getAllData(ProductCat::class);
     $currentUserInfo = $this->getLocaton();
     $posts = $this->getpaginateData(Product::class);

    return view('saller.products',[
        'user_id'=>$userId ,
        'cats'=>$cats ,
        'posts'=>$posts,
        'currentUserInfo'=>$currentUserInfo,
        'saller' => $userId
    ]);
}


public function sallerPayments(){
    $sallersid =  Auth::guard('saller')->check() ? Auth::guard('saller')->id() : true;
   // guard('saller')


    $products = Product::orderBy('id', 'desc')->paginate(50);
    $sallers = Saller::all();
    $payments = Payemnts::where('saller','=', $sallersid)
    ->Join('products','payemnts.product_id' , '=', 'products.id')
    // ->select(array('payemnts.*','products.name as productname','sallers.name AS sallername'))
    ->select(array('payemnts.*','products.name as productname' ))
     ->paginate(15);
//->join('sallers', 'sallers.id', '=', 'payemnts.saller')
// ->where('products.product_id', $product_id)



return view('saller.payments',['payments'=>$payments,'saller' => $sallersid, 'products'=>$products]);
}



///////admin search
public function payementsSerachSaller(Request $request){
    $userId = Auth::check() ? Auth::id() : true;
    $from = $request->from ;
    $to = $request->to ;
    $project = $request->project ;
    $saller = $userId ;




    $products = Product::orderBy('id', 'desc')->paginate(50);
    $sallers = Saller::all();
    $payments = Payemnts::where('product_id' , '>', 0)
    ->when($project, function($query,$project) {
        $query->where('product_id' , '=', $project );
    })
    ->when( $saller, function($query, $saller) {
        $query->where('saller' , '=',  $saller );
    })
    ->when( $from, function($query, $from) {
        $query->where('payemnts.created_at' , '>=',  $from );
    })
    ->when( $to , function($query, $to ) {
        $query->where('payemnts.created_at' , '<=',  $to.' 23:59:59'  );
    })
    -> join('products','payemnts.product_id' , '=', 'products.id')
    ->Join('sallers','payemnts.saller' , '=', 'sallers.id')
    ->Join('users','payemnts.user_id' , '=', 'users.id')
    ->select(array('payemnts.*','products.name as productname','sallers.name AS sallername','users.name as username'))
    ->paginate(15);






//->join('sallers', 'sallers.id', '=', 'payemnts.saller')
// ->where('products.product_id', $product_id)

//return $request ;
return view('saller.payments',['payments'=>$payments, 'products'=>$products , 'sallers'=>$sallers]);
}



}
