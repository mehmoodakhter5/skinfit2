<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Process;
use App\Http\Controllers\Roles;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', function () {
    return view('front.index');
});
Route::get('/signin', function () {
    return view('front.signin');
});
Route::get('/signup', function () {
    return view('front.signup');
});
Route::get('/auth/facebook', function () {
    return Socialite::driver('facebook')->redirect();
});
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


//Get Request FOR WEBSTIE (ADMIN PAGE VIEWS)
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





//API REQUEST FOR TABLES 
Route::get('getproduct',[Admin::class,'getproduct'])->name('getproduct');
Route::get('getbrand',[Admin::class,'getbrand'])->name('getbrand');
Route::get('getcategory',[Admin::class,'getcategory'])->name('getcategory');
Route::get('getsupplier',[Admin::class,'getsupplier'])->name('getsupplier');
Route::get('getinventory',[Admin::class,'getinventory'])->name('getinventory');
Route::get('users',[Roles::class,'getuser'])->name('users');





//LOGOUT FUNCTION 
Route::get('/logout', function(){
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');

});




require __DIR__.'/auth.php';
