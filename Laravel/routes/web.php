<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
    return view('welcome');
});
Route::group(['prefix' => 'admin'], function(){
    Route::get('/', [AdminController::class,'index'])->name('index');

    // Route::group(['prefix' => 'category'], function(){
    //     Route::get('/', [CategoryController::class,'index'])->name('category.index');
    //     Route::get('create', [CategoryController::class,'create'])->name('category.create');
    //     Route::post('add', [CategoryController::class,'add'])->name('category.add');

    //     Route::get('trashed', [CategoryController::class,'trashed'])->name('category.trashed');
    //     Route::get('restore/{id}', [CategoryController::class,'restore'])->name('category.restore');
    //     Route::get('force-delete/{id}', [CategoryController::class,'forceDelete'])->name('category.forceDelete');

    //     Route::get('edit/{cat}', [CategoryController::class,'edit'])->name('category.edit');
    //     Route::put('update/{cat}', [CategoryController::class,'update'])->name('category.update');
    //     Route::delete('destroy/{cat}', [CategoryController::class,'destroy'])->name('category.destroy');

    //     Route::delete('deleteAll', [CategoryController::class,'deleteAll'])->name('category.deleteAll');

    //     Route::delete('clear', [CategoryController::class,'clear'])->name('category.clear');
    // });
    // Route::group(['prefix' => 'product'], function(){
    //     Route::get('/', [ProductController::class,'index'])->name('product.index');
    //     Route::get('create', [ProductController::class,'create'])->name('product.create');
    //     Route::post('add', [ProductController::class,'add'])->name('product.add');

    //     Route::get('trashed', [ProductController::class,'trashed'])->name('product.trashed');
    //     Route::get('restore/{id}', [ProductController::class,'restore'])->name('product.restore');
    //     Route::get('force-delete/{id}', [ProductController::class,'forceDelete'])->name('product.forceDelete');

    //     Route::get('edit/{pro}', [ProductController::class,'edit'])->name('product.edit');
    //     Route::put('update/{pro}', [ProductController::class,'update'])->name('product.update');

    //     Route::delete('destroy/{pro}', [ProductController::class,'destroy'])->name('product.destroy');
    //     Route::delete('clear', [ProductController::class,'clear'])->name('product.clear');

    //     Route::delete('deleteAll', [ProductController::class,'deleteAll'])->name('product.deleteAll');

    //     Route::get('retrieve', [ProductController::class,'retrieve'])->name('product.retrieve');

    //     Route::get('image-edit/{image}', [ImageController::class,'edit'])->name('product.image-edit');
    //     Route::put('image-update/{image}', [ImageController::class,'update'])->name('product.image-update');
    //     Route::get('image-destroy/{image}', [ImageController::class,'destroy'])->name('product.image-destroy');

    // });
    // Route::group(['prefix' => 'customer'], function(){
    //     Route::get('/', [CustomerController::class,'index'])->name('customer.index');
    //     Route::get('create', [CustomerController::class,'create'])->name('customer.create');
    //     Route::post('add', [CustomerController::class,'add'])->name('customer.add');

    //     Route::get('trashed', [CustomerController::class,'trashed'])->name('customer.trashed');
    //     Route::get('restore/{id}', [CustomerController::class,'restore'])->name('customer.restore');
    //     Route::get('force-delete/{id}', [CustomerController::class,'forceDelete'])->name('customer.forceDelete');

    //     Route::get('edit/{cus}', [CustomerController::class,'edit'])->name('customer.edit');
    //     Route::put('update/{cus}', [CustomerController::class,'update'])->name('customer.update');

    //     Route::delete('destroy/{cus}', [CustomerController::class,'destroy'])->name('customer.destroy');
    //     Route::delete('clear', [CustomerController::class,'clear'])->name('customer.clear');
    //     Route::get('retrieve', [CustomerController::class,'retrieve'])->name('customer.retrieve');
    //     Route::delete('deleteAll', [CustomerController::class,'deleteAll'])->name('customer.deleteAll');
    // });
    // Route::group(['prefix' => 'banner'], function(){
    //     Route::get('/', [BannerController::class,'index'])->name('banner.index');
    //     Route::get('create', [BannerController::class,'create'])->name('banner.create');
    //     Route::post('add', [BannerController::class,'add'])->name('banner.add');

    //     Route::get('edit/{ban}', [BannerController::class,'edit'])->name('banner.edit');
    //     Route::put('update/{ban}', [BannerController::class,'update'])->name('banner.update');

    //     Route::delete('destroy/{ban}', [BannerController::class,'destroy'])->name('banner.destroy');

    // });
    // Route::group(['prefix' => 'advertisement'], function(){
    //     Route::get('/', [AdvertisementController::class,'index'])->name('advertisement.index');
    //     Route::get('edit/{adv}', [AdvertisementController::class,'edit'])->name('advertisement.edit');
    //     Route::put('update/{adv}', [AdvertisementController::class,'update'])->name('advertisement.update');

    // });
    // Route::group(['prefix' => 'comment'], function(){
    //     Route::get('/', [CommentController::class,'index'])->name('comment.index');
    //     Route::get('create', [CommentController::class,'create'])->name('comment.create');
    //     Route::post('add', [CommentController::class,'add'])->name('comment.add');

    //     Route::get('edit/{com}', [CommentController::class,'edit'])->name('comment.edit');
    //     Route::put('update/{com}', [CommentController::class,'update'])->name('comment.update');

    //     Route::delete('destroy/{com}', [CommentController::class,'destroy'])->name('comment.destroy');
    //     Route::delete('clear', [CommentController::class,'clear'])->name('comment.clear');
    // });
    // Route::group(['prefix' => 'admin'], function(){
    //     Route::get('/', [AdminsController::class,'index'])->name('admin.index');
    //     Route::get('create', [AdminsController::class,'create'])->name('admin.create');
    //     Route::post('add', [AdminsController::class,'add'])->name('admin.add');
    //     Route::get('edit/{adm}', [AdminsController ::class,'edit'])->name('admin.edit');
    //     Route::put('update/{adm}', [AdminsController ::class,'update'])->name('admin.update');
    //     Route::delete('destroy/{adm}', [AdminsController::class,'destroy'])->name('admin.destroy');

    // });
    // Route::group(['prefix' => 'order'], function(){
    //     Route::get('/', [OrderController::class,'index'])->name('order.index');
    //     Route::get('order/detail/{id}', [OrderController::class,'detail'])->name('admin.order.detail');
    //     Route::put('order/status/{id}', [OrderController::class,'status'])->name('order.status');


    // });


});