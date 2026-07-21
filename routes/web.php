<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use GuzzleHttp\Middleware;
use App\Http\Controllers\SallerController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductCatController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\PayemntsController;
use App\Http\Controllers\HomeSliderController ;
use App\Http\Controllers\MyUsers ;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\MySallers ;
use App\Http\Controllers\TopMenuController;
use App\Models\TopMenu;

/*
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
          return redirect('/main');
});

Route::get('/ses', function () {

  return session()->all(); // returns all session
});
Route::get('/post/{id?}', [MainPageController::class, 'post'])->name('post');
Route::get('/main/{id?}/{saller?}', [MainPageController::class, 'index'])->name('main');
Route::get('/pro', [MainPageController::class, 'producties'])->name('pro');
Route::get('/donation', [MainPageController::class, 'donation'])->name('donation');
Route::post('/donations', [MainPageController::class, 'donations'])->name('donations');
Route::get('/posts', [MainPageController::class, 'posts'])->name('posts');

///contact
Route::get('/contact', [ContactUsController::class, 'contactf'])->name('contact');
Route::post('/contactf', [ContactUsController::class, 'addData'])->name('contact.addDataf');

// cart jobes

Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('fastpay', [CartController::class, 'fastpay'])->name('cart.fastpay');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

///// checkout
Route::post('/checkout', [PayemntsController::class, 'checkout'])->name('checkout');
Route::get('/conferm/{data?}', [PayemntsController::class, 'conferm'])->name('conferm');
Route::get('/thanks/{data?}', function(){
    $menu = TopMenuController::index();
        $subbutton =  TopMenu::where('public', 'public')->where('parent','!=', '0')->get();

  return view('thanks',['menu'=>$menu,
            'subbutton'=>$subbutton]);
})->name('thanks');




// Route::get('/product/{id}', [MainPageController::class, 'causes_details']);

  //  return view('main');







Route::get('products', [ProductController::class, 'productList'])->name('products.list');
Route::get('producty', [ProductController::class, 'producty'])->name('products.producty');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');




/*      Admin Routs      */

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('login_form');
    Route::get('/log', [AdminController::class, 'log'])->name('log');
    Route::post('/login/owner', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/quick-login', [AdminController::class, 'quickLogin'])->name('admin.quickLogin');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout')->middleware('admin');
      Route::get('/register', [AdminController::class, 'register'])->name('admin.register');
    // Route::post('/create', [AdminController::class, 'create'])->name('admin.create');

    ////// Post Category
    Route::get('/category', [PostCategoryController::class, 'index'])->name('category.index')->middleware('admin');
    Route::get('/categoryf', [PostCategoryController::class, 'categoryf'])->name('category.categoryf')->middleware('admin');
    Route::post('addcategory', [PostCategoryController::class, 'addCategory'])->name('category.addCategory')->middleware('admin');;
    Route::get('updatecategory/{id}', [PostCategoryController::class, 'updatecategory'])->name('category.updatecategory')->middleware('admin');
    Route::post('saveUpdatecategory/{id}', [PostCategoryController::class, 'saveUpdatecategory'])->name('category.saveUpdatecategory')->middleware('admin');
    Route::post('deletecategory/{id}', [PostCategoryController::class, 'deletecategory'])->name('category.deletecategory')->middleware('admin');
    //////// Posts
    Route::get('allposts', [PostController::class, 'index'])->name('allposts.index')->middleware('admin');
    Route::get('deletedPosts', [PostController::class, 'deletedPosts'])->name('allposts.deletedPosts')->middleware('admin');

    Route::post('addNewPost', [PostController::class, 'addNewPost'])->name('allposts.addNewPost')->middleware('admin');
    Route::get('addNewPostform', [PostController::class, 'addNewPostform'])->name('allposts.addNewPostform')->middleware('admin');
    Route::get('updatePost/{id}', [PostController::class, 'updatePost'])->name('allposts.updatePost')->middleware('admin');
    Route::post('saveUpdatePost/{id}', [PostController::class, 'saveUpdatePost'])->name('allposts.saveUpdatePost')->middleware('admin');
    Route::post('deletePost/{id}', [PostController::class, 'deletePost'])->name('allposts.deletePost')->middleware('admin');

  ////// products Category
  Route::get('ProductCategory',[ProductCatController::class,'index'])->name('ProductCategory.index');
  Route::get('ProductCategoryform',[ProductCatController::class,'ProductCategoryform'])->name('ProductCategory.ProductCategoryform');
  Route::post('Productaddcategory',[ProductCatController::class,'addCategory'])->name('ProductCategory.addCategory');
  Route::get('Productupdatecategory/{id}',[ProductCatController::class,'updatecategory'])->name('ProductCategory.updatecategory');
  Route::post('ProductsaveUpdatecategory/{id}',[ProductCatController::class,'saveUpdatecategory'])->name('Productupdatecategory.saveUpdatecategory');
  Route::post('Productdeletecategory/{id}',[ProductCatController::class,'deletecategory'])->name('Productupdatecategory.deletecategory');

  ////////Products

  Route::get('Products',[ProductController::class,'index'])->name('Products.index');
  Route::get('Productsf',[ProductController::class,'Productsf'])->name('Products.Productsf');
  Route::get('ProductsDeleted',[ProductController::class,'ProductsDeleted'])->name('Products.ProductsDeleted');


  Route::post('ProductsaddNewPost',[ProductController::class,'addNewPost'])->name('Products.addNewPost');
  Route::get('ProductsupdatePost/{id}',[ProductController::class,'updatePost'])->name('Products.updatePost');

  Route::post('ProductssaveUpdate/{id}',[ProductController::class,'saveUpdatePost'])->name('Products.saveUpdatePost');
  Route::post('ProductsdeletePost/{id}',[ProductController::class,'deletePost'])->name('Products.deletePost');

      ////////main Slider
      Route::get('slider',[HomeSliderController::class,'index'])->name('slider.index');
      Route::get('addsliderf',[HomeSliderController::class,'addsliderf'])->name('slider.addsliderf');
      Route::post('addslider',[HomeSliderController::class,'addNewaddslider'])->name('slider.addNewaddslider');
      Route::get('Updatesliderf/{id}',[HomeSliderController::class,'Updatesliderf'])->name('slider.Updatesliderf');
      Route::post('Updateslider/{id}',[HomeSliderController::class,'Updateslider'])->name('slider.Updateslider');
    ////////main header menu

   ////////main menu button
   Route::get('menu',[TopMenuController::class,'index'])->name('menu.index')->middleware('admin');
   Route::get('addmenuf',[TopMenuController::class,'addmenuf'])->name('menu.addmenuf')->middleware('admin');
   Route::post('addNewamenu',[TopMenuController::class,'addNewamenu'])->name('menu.addNewamenu')->middleware('admin');
   Route::get('Updatemenuf/{id}',[TopMenuController::class,'Updatemenuf'])->name('menu.Updatemenuf')->middleware('admin');
   Route::post('updatemenu/{id}',[TopMenuController::class,'Updatemenu'])->name('menu.updatemenu')->middleware('admin');



     ////////payements
          Route::get('Productspay/{id}',[PayemntsController::class,'paydirict'])->name('Products.pay');
      Route::post('Productspay/{id}',[PayemntsController::class,'paydiricts'])->name('Product.pay');

      Route::get('payments',[PayemntsController::class,'index'])->name('paymnts.index');
      Route::post('payments',[PayemntsController::class,'payementsSerach'])->name('paymnts.search');
      Route::get('payments/export/', [PayemntsController::class, 'export'])->middleware('admin');



    ///users
    Route::get('users',[MyUsers::class,'index'])->name('users.index');
    Route::get('users/export/', [MyUsers::class, 'export'])->middleware('admin');
    ///sallers
    Route::get('sallers',[MySallers::class,'index'])->name('sallers.index');
    Route::any('/adminautologin', [SallerController::class, 'adminautologin'])->name('admin.adminautologin')->middleware('admin');

//////contact us
Route::get('contact', [ContactUsController::class, 'index'])->name('admin.contact');

/// create salller
Route::get('/registersaller', [SallerController::class, 'register'])->name('saller.register')->middleware('admin');
Route::post('/createsaller', [SallerController::class, 'create'])->name('saller.create')->middleware('admin');
Route::get('/stopsaller', [SallerController::class, 'stopsaller'])->name('saller.stopsaller')->middleware('admin');
Route::post('/stopsaller', [SallerController::class, 'stopsaller'])->name('saller.stopsallers')->middleware('admin');

});
/*            */



Route::get('/dashboard', [PayemntsController::class,'user_donaits'])->middleware(['auth'])->name('dashboard');







require __DIR__ . '/auth.php';
/*      Saller  Routs      */
Route::prefix('saller')->group(function () {
    Route::get('/', [SallerController::class, 'index'])->name('saller');
    Route::post('/login/owner', [SallerController::class, 'login'])->name('saller.login');
    Route::get('/dashboard', [SallerController::class, 'dashboard'])->name('saller.dashboard')->middleware('saller');

    Route::get('/logout', [SallerController::class, 'logout'])->name('saller.logout')->middleware('saller');

    Route::get('/products',[SallerController::class,'sallerProduct'])->name('saller.products')->middleware('saller');
    Route::get('/payments',[SallerController::class,'sallerPayments'])->name('saller.payments')->middleware('saller');
    Route::post('/payments',[SallerController::class,'payementsSerachSaller'])->name('payementsSerachSaller.search')->middleware('saller');



});
