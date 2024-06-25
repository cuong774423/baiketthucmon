<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminContactController;


Route::get('/', function () {
    return view('welcome');
});
Route::resource('categories', PageController::class);

Route::resource('pages', PageController::class);

Route::get('index',[PageController::class,'index'])->name('page.index');
Route::get('/product/{id}',[PageController::class,'show'])->name('page.product');   
Route::get('/category/{id}', [PageController::class, 'showCategory'])->name('page.category');
Route::get('/add-to-cart/{id}',[PageController::class,'addToCart'])->name('page.addtocart');
Route::get('/del-cart/{id}',[PageController::class,'delCartItem'])->name('page.xoagiohang');
Route::get('checkout',[PageController::class,'getCheckout'])->name('page.getdathang');
Route::post('checkout',[PageController::class,'postCheckout'])->name('page.postdathang');



Route::get('/dangky',[PageController::class,'getSignin'])->name('getSignin');
Route::post('/dangky',[PageController::class,'postSignin'])->name('postSignin');

Route::get('/dangnhap',[PageController::class,'getLogin'])->name('getlogin');
Route::post('/dangnhap',[PageController::class,'postLogin'])->name('postlogin');

Route::get('/dangxuat',[PageController::class,'getLogout'])->name('getlogout');

Route::post('/input-email',[PageController::class,'postInputEmail'])->name('postInputEmail');
Route::get('/input-email',[PageController::class,'getInputEmail'])->name('getInputEmail');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::resource('cart', CartController::class);

Route::get('index',[CartController::class,'index'])->name('cart.index');
Route::get('/add-to-cart2/{id}',[CartController::class,'addToCart'])->name('cart.addtocart');
Route::get('/del-cart2/{id}',[CartController::class,'delCartItem'])->name('cart.xoagiohang');
Route::post('/update-cart', [CartController::class, 'updateCart'])->name('updateCart');
Route::get('/reduce/{id}', [CartController::class, 'getReduceByOne'])->name('cart.reduceByOne');  

use App\Http\Controllers\BillController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

use App\Http\Middleware\AdminLoginMiddleware;

Route::get('/admin/dangnhap', [UserController::class, 'getLogin'])->name('admin.getLogin');
Route::post('/admin/dangnhap', [UserController::class, 'postLogin'])->name('admin.postLogin');
Route::get('/admin/dangxuat', [UserController::class, 'getLogout']);

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('users', UserController::class);

// Nhóm admin với các tuyến đường cụ thể
Route::prefix('admin')->group(function () {
    Route::middleware([AdminLoginMiddleware::class])->group(function () {
        Route::get('dashboard', [UserController::class, 'dashboard'])->name('admin.dashboard');

        Route::group(['prefix'=>'category'], function(){
            Route::get('danhsach', [CategoryController::class, 'index'])->name('admin.getCateList');
            Route::get('them', [CategoryController::class, 'create'])->name('admin.getCateAdd');
            Route::post('them', [CategoryController::class, 'store'])->name('admin.postCateAdd');
            Route::get('xoa/{id}', [CategoryController::class, 'destroy'])->name('admin.getCateDelete');
            Route::get('sua/{id}', [CategoryController::class, 'edit'])->name('admin.getCateEdit');
            Route::post('sua/{id}', [CategoryController::class, 'update'])->name('admin.postCateEdit');
        });

        Route::group(['prefix'=>'product'], function(){
            Route::get('danhsach', [ProductController::class, 'index'])->name('admin.getProductList');
            Route::get('them', [ProductController::class, 'create'])->name('admin.getProductAdd');
            Route::post('them', [ProductController::class, 'store'])->name('admin.postProductAdd');
            Route::get('xoa/{id}', [ProductController::class, 'destroy'])->name('admin.getProductDelete');
            Route::get('sua/{id}', [ProductController::class, 'edit'])->name('admin.getProductEdit');
            Route::post('sua/{id}', [ProductController::class, 'update'])->name('admin.postProductEdit');
        });

        Route::group(['prefix'=>'user'], function(){
            Route::get('danhsach', [UserController::class, 'index'])->name('admin.getUserList');
            Route::get('them', [UserController::class, 'create'])->name('admin.getUserAdd');
            Route::post('them', [UserController::class, 'store'])->name('admin.postUserAdd');
            Route::get('xoa/{id}', [UserController::class, 'destroy'])->name('admin.getUserDelete');
            Route::get('sua/{id}', [UserController::class, 'edit'])->name('admin.getUserEdit');
            Route::post('sua/{id}', [UserController::class, 'update'])->name('admin.postUserEdit');
        });
            Route::get('/bills', [BillController::class, 'index'])->name('bills.index');
            Route::get('/bills/{id}/edit', [BillController::class, 'edit'])->name('bills.edit');
            Route::put('/bills/{id}', [BillController::class, 'update'])->name('bills.update');
            Route::group(['prefix'=>'contact'], function(){
                Route::get('contactad', [AdminContactController::class, 'index'])->name('admin.listcontact');
                Route::post('contactad/{id}/reply', [AdminContactController::class, 'reply'])->name('admin.contacts.reply');
                Route::get('xoa/{id}', [AdminContactController::class, 'destroy'])->name('admin.getContactDelete');
            });
 
    });
});
    Route::resource('contacts', AdminContactController::class);
            