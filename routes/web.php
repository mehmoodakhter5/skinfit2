<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Process;

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
    return view('admin.login');
});

//Get Request FOR WEBSTIE (EXAMPLE PAGE VIEWS)
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


//POST REQUESTS (POST SUBMISSION)
Route::POST('auth',  [Register::class, 'login']);
Route::POST('insert-product', [Process::class, 'insert_product']);
Route::POST('post-category', [Process::class, 'add_category']);
Route::POST('post-brand', [Process::class, 'add_brand']);
Route::POST('post-sub-category',[Process::class,'add_sub_category']);
Route::POST('post-sub-category-1',[Process::class,'add_sub_category_1']);
Route::POST('post-supplier',[Process::class,'post_supplier']);
Route::POST('import-product',[Process::class,'product_import']);



//API REQUEST FOR TABLES 
Route::get('getproduct',[Admin::class,'getproduct'])->name('getproduct');
Route::get('getbrand',[Admin::class,'getbrand'])->name('getbrand');
Route::get('getcategory',[Admin::class,'getcategory'])->name('getcategory');
Route::get('getsupplier',[Admin::class,'getsupplier'])->name('getsupplier');






//LOGOUT FUNCTION 
Route::get('/logout', function(){
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');

});




require __DIR__.'/auth.php';
