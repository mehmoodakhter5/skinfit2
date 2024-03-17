<?php
use App\Http\Livewire\Addtocart;
use App\Http\Controllers\Front\Ecommerce;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
//FRONT CONTROLLERS
use App\Http\Controllers\Front\Main;
use App\Http\Controllers\Front\Catalog;
use App\Http\Controllers\Front\Dashboard;
use App\Http\Controllers\Front\Login;
//END FRONT
//MODELS 
use App\Models\Customer;
use App\Http\Livewire\Brands;
use App\Models\Category; 
use App\Models\Sub_category; 
//END MODELS
//ADMIN CONTROLLERS
use App\Http\Controllers\Register;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Process;
use App\Http\Controllers\Roles;
use App\Http\Controllers\Homepage;
use App\Http\Controllers\Header;

//END ADmin

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

//FRONTEND VIEWS.
Route::get('/', [Main::class,'index']);
Route::get('/product/{slug}',[Catalog::class,'Productview']);
Route::get('/brand/{slug}',[Catalog::class,'brand']);

Route::get('/signin', function () {
    if(Auth::id()){
        return redirect('my-dashboard');
    }else{
        return view('front.signin');

    }
});
Route::get('/signup', function () {
    return view('front.signup');
});
Route::get('/about-us',function(){
    return view('front.about');
});
Route::get('/whishlist/{id}',[Ecommerce::class,'add_whislist']);

Route::get('/my-cart',[Main::class,'cart']);
Route::get('/checkout',[Main::class,'checkout']);
Route::get('/my-dashboard',[Dashboard::class,'index']);
Route::get('/my-dashboard/orders',[Dashboard::class,'orders']);
Route::get('/my-dashboard/wish-list',[Dashboard::class,'wishlist']);
Route::get('/contact-us',function(){
    return view('front.contact');
});

Route::get('/track-your-order',function(){
    return view('front.track-your-order');
});
Route::get('/tracking',[Ecommerce::class,'track']);


Route::get('/auth/facebook', function () {
    return Socialite::driver('facebook')->redirect();
});
Route::get('/clear',function(){
   $cleared = \Cart::clear();
   if($cleared){
    return redirect('/');
   }
});
Route::get('/combo-add/{id}/{secondid}',[Ecommerce::class,'combo']);

Route::get('/auth/callback', function () {
    $FbUser = Socialite::driver('facebook')->user();
    
    $user = Customer::updateOrCreate([
        'customer_facebok_id' => $FbUser->id,
    ], [
        'customer_first_name' => $FbUser->name,
        'customer_email' => $FbUser->email,
        'customer_facebook_token' => $FbUser->token,
        'customer_facebook_refreshtoken' => $FbUser->refreshToken,
    ]);
 
    Auth::login($user);
 
    // return redirect('/');
});
Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/livewire/update', $handle);
});


///FRONTEND POST METHODS 
Route::post('/post-login',[Login::class,'customer_auth']);
Route::post('addtocart/',[Addtocart::class,'addToCart']);
Route::post('post-checkout',[Ecommerce::class,'checkout']);
Route::post('post-cart',[Ecommerce::class,'store_cart']);
Route::post('update-cart',[Ecommerce::class,'update_cart']);





//Thank You Page 
Route::get('/thankyou',function(){
    return view('front.checkout2');
});

//Blog Listing Page
Route::get('/blog',[Main::class,'blogs']);
//contact page
Route::get('/contact',function(){
    return view('front.contact');
});
Route::get('/our-brands',[Main::class,'brands']);
Route::get('/about-us',function(){
    return view('front.our-about');
});



//Same page for brand and all categories with banners acccording to their own cruds. 


















//Get Request FOR ADMIN
Route::get('/admin/login', function () {
    return view('admin.login');
});
Route::get('/admin', [Admin::class, 'index']);
Route::get('/admin/product', [Admin::class, 'product']);
Route::get('/admin/add-new-product', [Admin::class, 'productadd']);
Route::get('/admin/category', [Admin::class, 'category']);
Route::get('/admin/add-new-category', [Admin::class, 'add_category']);
Route::get('/admin/sub-category', [Admin::class, 'subcategory']);
Route::get('admin/add-new-sub-category', [Admin::class, 'addsubcategory']);
Route::get('/admin/sub-category-1', [Admin::class, 'subcategory1']);
Route::get('admin/add-new-sub-category-1', [Admin::class, 'addsubcategory1']);
Route::get('admin/brands', [Admin::class, 'brands']);
Route::get('admin/add-new-brand', [Admin::class, 'add_brand']);
Route::get('admin/supplier', [Admin::class, 'supplier']);
Route::get('admin/add-supplier', [Admin::class, 'addsupplier']);
Route::get('admin/inventory', [Admin::class, 'inventroy']);
Route::get('admin/add-new-inventory', [Admin::class, 'add_inventroy']);
Route::get('admin/add-new-user', [Roles::class, 'view']);
Route::get('admin/all-user', [Roles::class, 'index']);
Route::get('admin/blog',[Admin::class,'blog']);
Route::get('admin/po',[Admin::class,'po']);
Route::get('admin/homepage',[Admin::class,'homepage']);
Route::get('admin/header-setting',[Admin::class,'header_setting']);



//POST REQUESTS (POST SUBMISSION)
Route::POST('auth',  [Register::class, 'login']);
Route::POST('insert-product', [Process::class, 'insert_product']);
Route::POST('post-category', [Process::class, 'add_category']);
Route::POST('post-brand', [Process::class, 'add_brand']);
Route::POST('post-sub-category',[Process::class,'add_sub_category']);
Route::POST('post-sub-category-1',[Process::class,'add_sub_category_1']);
Route::POST('post-supplier',[Process::class,'post_supplier']);
Route::POST('import-product',[Process::class,'product_import']);
Route::POST('post-inventory',[Process::class,'post_inventory']);
Route::POST('post-user',[Roles::class,'store']);
Route::POST('save_purchase_order',[Process::class,'save_po']);
Route::put('update-homepage/{id}',[Homepage::class,'store'])->name('homepage-update');
Route::put('/update-header/{id}',[Header::class,'store_header'])->name('header-update');




//API REQUEST FOR TABLES 
Route::get('getselectedproduct/{id}',[Admin::class,'getselectedproduct'])->name('getselectedproduct');
Route::get('getproduct',[Admin::class,'getproduct'])->name('getproduct');
Route::get('getbrand',[Admin::class,'getbrand'])->name('getbrand');
Route::get('getcategory',[Admin::class,'getcategory'])->name('getcategory');
Route::get('getsupplier',[Admin::class,'getsupplier'])->name('getsupplier');
Route::get('/getinventory',[Admin::class,'getinventory'])->name('getinventory');
Route::get('getpo',[Admin::class,'getpo'])->name('getpo');
Route::get('users',[Roles::class,'getuser'])->name('users');





//LOGOUT FUNCTION 
Route::get('/logout', function(){
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');

});
Route::get('/clear/{id}', function(){
    \Cart::remove(request('id'));


    return Redirect()->back();

});

Route::get('/clearall', function(){
    \Cart::clear();

    return Redirect()->back();

});


$categoryNames = Category::pluck('category_slug')->implode('|');
$subcategoryNames = Sub_category::pluck('sub_category_slug')->implode('|');

Route::get('/{slug}',[Catalog::class,'category'])->where('category_slug',$categoryNames);
Route::get('/{slug}/{anotherslug}', [Catalog::class, 'sub_category'])
    ->where([
        'category_slug' => $categoryNames,
        'sub_category_slug' => $subcategoryNames
    ]);
require __DIR__.'/auth.php';
