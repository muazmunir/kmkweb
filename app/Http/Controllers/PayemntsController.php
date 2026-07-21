<?php

namespace App\Http\Controllers;
use App\Models\Payemnts ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session ;
use App\Models\Product;
use App\Models\Saller;
use App\Exports\PaymentsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\TopMenuController;
use App\Models\TopMenu;

class PayemntsController extends Controller
{
    public function export()
    {
        return Excel::download(new PaymentsExport, 'payments.xlsx');
    }

    //
    public function index(){
        $products = Product::orderBy('id', 'desc')->paginate(50);
        $sallers = Saller::all();



                    $payments = Payemnts::Join('products','payemnts.product_id' , '=', 'products.id')
                    ->Join('sallers','payemnts.saller' , '=', 'sallers.id')
                    ->Join('users','payemnts.user_id' , '=', 'users.id')
                    ->select(array('payemnts.*','products.name as productname','sallers.name AS sallername','users.name as username' ,\DB::raw('COALESCE(payemnts.phone, users.phone) as display_phone')))
                    ->orderBy('id', 'DESC')->paginate(15);
        //->join('sallers', 'sallers.id', '=', 'payemnts.saller')
       // ->where('products.product_id', $product_id)



      return view('admin.payments',['payments'=>$payments , 'products'=>$products , 'sallers'=>$sallers]);
    }

    public function paydirict( $id){
        $post = Product::findOrFail($id);
        return view('admin.fastpay',['post'=>$post ]) ;
    }
    public function paydiricts(Request $request){

            $product_id = $request->id;
            $paymethod=$request->paymethod;
            $value=$request->newvalue;
            $country ="kw";
            $ref ="101010";
            $result = 'Captured';
            $payid="101010" ;
            $crd="101010";
            $TranID ="101010";
            $TrackID="101010";
            $Auth="101010";
            $session = 'admin';
            $deleted="0";
            $total = $request->total;


            $products = Product::findOrFail($product_id);
            $products->paied = $products->paied+$value ;
            $products->save();


            $addpay = new Payemnts;
            $addpay->product_id = $product_id ;
            $addpay->user_id =  1;
            $addpay->saller = 1;
            $addpay->paymethod =  $paymethod;
            $addpay->value =  $value;
            $addpay->country = $country ;
            $addpay->ref = $ref ;
            $addpay->result = $result ;
            $addpay->payid =  $payid;
            $addpay->crd = $crd;
            $addpay->TranID = $TranID ;
            $addpay->TrackID =  $TrackID;
            $addpay->Auth =  $Auth;
            $addpay->session =  $session;
            $addpay->deleted =  $deleted;
            $addpay->save();
            return  redirect()->back()->with('status','  تمت  عملية التبرع بنجاح')  ;
        }


///////admin
    public function payementsSerach(Request $request){
        $from = $request->from ;
        $to = $request->to ;
        $project = $request->project ;
        $saller = $request->saller ;
        $ptype = $request->ptype ;




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
        ->when( $ptype, function($query, $ptype) {
            $query->where('payemnts.paymethod' , '=',  $ptype );
        })
        ->when( $to , function($query, $to ) {
            $query->where('payemnts.created_at' , '<=',  $to.' 23:59:59'  );
        })
        -> join('products','payemnts.product_id' , '=', 'products.id')
        ->Join('sallers','payemnts.saller' , '=', 'sallers.id')
        ->Join('users','payemnts.user_id' , '=', 'users.id')
        ->select(array('payemnts.*','products.name as productname','sallers.name AS sallername','users.name as username',\DB::raw('COALESCE(payemnts.phone, users.phone) as display_phone')))
        ->paginate(15);


        return view('admin.payments',['payments'=>$payments, 'products'=>$products , 'sallers'=>$sallers]);

}


public function user_donaits(){
       $menu = TopMenuController::index();
       $subbutton =  TopMenu::where('public', 'public')->where('parent','!=', '0')->get();

    $user_id =  Auth::user()->id ;
    $payments = Payemnts::where('user_id' , '=',$user_id)
    ->Join('products','payemnts.product_id' , '=', 'products.id')
    ->Join('sallers','payemnts.saller' , '=', 'sallers.id')
    ->Join('users','payemnts.user_id' , '=', 'users.id')
    ->select(array('payemnts.*','products.name as productname','sallers.name AS sallername','users.name as username')) ->paginate(15);
//->join('sallers', 'sallers.id', '=', 'payemnts.saller')
// ->where('products.product_id', $product_id)
return view('dashboard',['payments'=>$payments,
            'menu'=>$menu,
            'subbutton'=>$subbutton]);
}




    public function checkout(Request $request){

        $token = $request->_token ;
        $total =  \Cart::getTotal() ;
        $paymethod = $request->paymethod ;
        $saller = Session::get('saller'); ;

        $phone = $request->input('phone');
        if (!$phone && Auth::check()) {
            $phone = Auth::user()->phone;
        }
        Session::put('donor_phone', $phone);

        $mf ='https://baniwail.com/kpay/SendPerformREQuest.php' ;
        $url = $mf.'?token='.$token.'&total='.$total.'&paymethod='.$paymethod.'&saller='.$saller.'&phone='.urlencode($phone ?? '') ;
      return redirect()->to($url );



    }
    public function conferm(Request $request){
      //  $var = unserialize(urldecode($_GET['array']));

      $cartItems = \Cart::getContent();
      $saller =   Session::get('saller');
       $totaly =  \Cart::getTotal() ;

    if($request->status == 'Captured'){
        $userId = Auth::check() ? Auth::id() : true;
        $phone = $request->input('phone')
            ?: Session::get('donor_phone')
            ?: (Auth::check() ? Auth::user()->phone : null);


        foreach ($cartItems as $item) {

            $product_id = $item->id;
            $paymethod=$request->paymethod;
            $value=$item->quantity;
            $country ="kw";
            $ref = $item->UDF2 ?? "3002";
            $result = $request->status;
            $payid="12000" ;
            $crd="123";
            $TranID ="123";
            $TrackID="20120";
            $Auth="10";
            $session = $request->token;
            $deleted="0";
            $total = $request->total;


            $products = Product::findOrFail($product_id);
            $products->paied = $products->paied+$value ;
            $products->save();


            $addpay = new Payemnts;
            $addpay->product_id = $product_id ;
            $addpay->user_id = $userId ?: 1;
            $addpay->phone = $phone;
            $addpay->saller = $saller ?: 1;
            $addpay->paymethod =  $paymethod;
            $addpay->value =  $value;
            $addpay->country = $country ;
            $addpay->ref = $ref ;
            $addpay->result = $result ;
            $addpay->payid =  $payid;
            $addpay->crd = $crd;
            $addpay->TranID = $TranID ;
            $addpay->TrackID =  $TrackID;
            $addpay->Auth =  $Auth;
            $addpay->session =  $session;
            $addpay->deleted =  $deleted;
            $addpay->save();
            Session::put('cartcount', count($cartItems));
// dd($cartItems);
    }

    \Cart::clear();
    Session::forget('donor_phone');
    Session::put('cartcount',0);
    $session = $request->token;
    return  redirect()->route('thanks',['total'=> $totaly , 'session'=>$session, 'status'=>'Captured' ])  ;

}
else {
         return  redirect()->route('cart.list')->with('error','لم تتم عملية التبرع بنجاح')  ;
    ;
}

}



public function addPayement(Request $request){

    //     ['product_id','user_id','paymethod','laravel','country',
    // 'ref','result','payid','crd','TranID','TrackID','Auth','session','deleted'];
        $product_id =1;
        $user_id =1;
        $saller =1;
        $paymethod="tap";
        $value=5;
        $country ="kw";
        $ref ="3002";
        $result ="CAPTURED";
        $payid="12000" ;
        $crd="123";
        $TranID ="123";
        $TrackID="20120";
        $Auth="10";
        $session="101";
        $deleted="0";
        $addpay = new Payemnts;
        $addpay->product_id = $product_id ;
        $addpay->user_id = $user_id ;
        $addpay->paymethod =  $paymethod;
        $addpay->value =  $value;
        $addpay->country = $country ;
        $addpay->ref = $ref ;
        $addpay->result = $result ;
        $addpay->payid =  $payid;
        $addpay->crd = $crd;
        $addpay->TranID = $TranID ;
        $addpay->TrackID =  $TrackID;
        $addpay->Auth =  $Auth;
        $addpay->session =  $session;
        $addpay->deleted =  $deleted;
        $addpay->save();
        return 'Payement Done';



    }


}
