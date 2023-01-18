<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Frontend\FrontendController;

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
    




Route::get('admin/login', [App\Http\Controllers\Admin\LoginController::class, 'showLogin'])->name('admin.showlogin');
Route::post('admin/login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('admin.login');
Route::get('/admin/logout',[App\Http\Controllers\Admin\LoginController::class,'logout'])->name('admin.logout');


// auth manager
Route::prefix('admin')->middleware('auth')->group(function () {
    // show home
    Route::get('/',[App\Http\Controllers\Admin\NewOrderController::class,'showHome'])->name('admin.showHome');
    // category ??? 
    Route::prefix('category')->group(function() {
        // get
        Route::get('list',[App\Http\Controllers\Admin\CategoryController::class,'showCategoriesList'])->name('admin.showCategoriesList');
        // post
        Route::get('create',[App\Http\Controllers\Admin\CategoryController::class,'interfaceAddCategoriesList'])->name('admin.interfaceAddCategoriesList');
        Route::post('create',[App\Http\Controllers\Admin\CategoryController::class,'addCategoriesList'])->name('admin.postCategoriesList');
        // update
        Route::get('list/update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'getEdit'])->name('admin.getUpdateCategoriesList');
        Route::post('list/update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'postEdit'])->name('admin.postUpdateCategoriesList');

        // delete
        Route::get('list/delete/{id}',[App\Http\Controllers\Admin\CategoryController::class,'deleteCategoriesList'])->name('admin.deleteCategoriesList');
    });

    Route::prefix('banner')->group(function() {
        Route::get('list',[BannerController::class,'viewBannerList'])->name('admin.viewBannerList');
        Route::get('create',[BannerController::class,'createBanner'])->name('banner.create');
        Route::post('create',[BannerController::class,'storeBanner']);
        Route::get('update/{id}',[BannerController::class,'getUpdateBanner'])->name('banner.getUpdate');
        Route::post('update/{id}',[BannerController::class,'updateBanner'])->name('banner.update');
        Route::get('deletebanner/{id}', [BannerController::class, 'deleteBanner'])->name('banner.delete');
    });

    // product ???
    Route::prefix('products')->group(function() {
        // get product
        Route::get('list', [App\Http\Controllers\Admin\ProductController::class,'showProductList'])->name('admin.showProductList');

        // post product
        Route::get('create', [App\Http\Controllers\Admin\ProductController::class,'getCreateProduct'])->name('admin.getCreateProduct');
        Route::post('create', [App\Http\Controllers\Admin\ProductController::class,'addProduct'])->name('admin.addProduct');

        // update Product
        Route::get('list/update/{id}', [App\Http\Controllers\Admin\ProductController::class,'getUpdateProduct'])->name('admin.getUpdateProduct');
        Route::post('list/update/{id}', [App\Http\Controllers\Admin\ProductController::class,'updateProduct'])->name('admin.updateProduct');

        // delete product
        Route::get('list/delete/{id}', [App\Http\Controllers\Admin\ProductController::class,'deleteProduct'])->name('admin.deleteProduct');
    });

    // introduce

    Route::prefix('introduce')->group(function() {
        // get update
        Route::get('update',[App\Http\Controllers\Admin\IntroduceController::class,'getUpdateIntroduce'])->name('get.intro');
        // post update
        Route::post('update-{id}',[App\Http\Controllers\Admin\IntroduceController::class,'updateIntroduce'])->name('updateIntroduce');
    });

    Route::prefix('appointment')->group(function() {
        // get update
        Route::get('list',[App\Http\Controllers\Admin\OrderController::class,'orderAppointment'])->name('get.orderAppointment');
    });
    


    // editting
    Route::prefix('editing')->group(function () {
        // get
        Route::get('update', [App\Http\Controllers\Admin\EditProfileController::class, 'getEdit'])->name('admin.getEditProfile');
        // post
        Route::post('update', [App\Http\Controllers\Admin\EditProfileController::class, 'updateProfile'])->name('admin.getEditProfile');
    });

    // service

    Route::prefix('service')->group(function() {
        Route::get('list',[App\Http\Controllers\Admin\CategoryController::class, 'showServiceCategory'])->name('admin.ShowServiceCategory');
         // post
        Route::get('create',[App\Http\Controllers\Admin\CategoryController::class,'getAddServiceCategory'])->name('admin.getAddServiceCategory');
        Route::post('create',[App\Http\Controllers\Admin\CategoryController::class,'addServiceCategory'])->name('admin.addServiceCategory');
        // update
        Route::get('list/update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'getEditService'])->name('admin.getUpdateServiceCategory');
        Route::post('list/update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'postEditService'])->name('admin.postServiceCategory');

        // delete
        Route::get('list/delete/{id}',[App\Http\Controllers\Admin\CategoryController::class,'deleteServiceCategory'])->name('admin.deleteServiceCategory');
    });

    Route::prefix('blog')->group(function() {
        Route::get('list',[BlogController::class,'BlogList'])->name('blog.list');
        Route::get('create',[BlogController::class,'createBlog'])->name('blog.create');
        Route::post('create',[BlogController::class,'storeBlog']);
        Route::get('update/{id}',[BlogController::class,'getUpdateBlog'])->name('blog.getUpdate');
        Route::post('update/{id}',[BlogController::class,'updateBlog'])->name('blog.update');
        Route::get('deleteblog/{id}', [BlogController::class, 'deleteBlog'])->name('blog.delete');

    });

    // order
    Route::prefix('order')->group(function() {
        //show list order
        Route::get('/get', [App\Http\Controllers\Admin\OrderController::class, 'showListOrder'])->name('showListOrder');

        // show detail order
        Route::get('/details-{id}', [App\Http\Controllers\Admin\OrderController::class, 'showDetailsOrder'])->name('showDetailsOrder');
    });

    // feelback
    Route::prefix('feedback')->group(function() {
        //show list order
        Route::get('/get', [App\Http\Controllers\Admin\FeedbackController::class, 'showFeedback'])->name('showFeedback');
        Route::get('/create', [App\Http\Controllers\Admin\FeedbackController::class, 'showcreateFeedback'])->name('showcreateFeedback');
        Route::post('/create', [App\Http\Controllers\Admin\FeedbackController::class, 'createFeedback'])->name('createFeedback');
        // show detail order
        Route::get('/update-{id}', [App\Http\Controllers\Admin\FeedbackController::class, 'showUpdateFeedback'])->name('showUpdateFeedback');
        Route::post('/update-{id}', [App\Http\Controllers\Admin\FeedbackController::class, 'UpdateFeedback'])->name('updateFeedback');
        Route::get('/delete-{id}', [App\Http\Controllers\Admin\FeedbackController::class, 'deleteFeedback'])->name('deleteFeedback');
        
    });
});

// frontend ....
// home
Route::get('/',[App\Http\Controllers\Frontend\FrontendController::class, 'showHome'])->name('showhome');

// book
Route::get('/dat-lich',[App\Http\Controllers\Frontend\FrontendController::class , 'showFormBook'])->name('showFormBook');
Route::post('/dat-lich',[App\Http\Controllers\Frontend\FrontendController::class , 'appointments'])->name('appointments');


Route::get('/danh-muc/{slug}',[App\Http\Controllers\Frontend\FrontendController::class, 'showProduct'])->name('showProduct');
Route::get('/san-pham-con/{id}',[App\Http\Controllers\Frontend\FrontendController::class, 'showChildCategory'])->name('showChildCategory');
Route::get('/san-pham/{id}-{slug}',[App\Http\Controllers\Frontend\FrontendController::class , 'showDetailsProduct'])->name('showDetailsProduct');
Route::get('/gioi-thieu',[App\Http\Controllers\Frontend\FrontendController::class, 'introduce'])->name('introduce');



// bumbum
Route::get('/them-{id}', [App\Http\Controllers\Frontend\AddProductController::class, 'addCart'])->name('addProduct');

Route::get('/gio-hang',[App\Http\Controllers\Frontend\AddProductController::class , 'showCartList'])->name('showCartList');
Route::get('/xoa-gio-hang-{rowId}',[App\Http\Controllers\Frontend\AddProductController::class , 'deleteCart'])->name('deleteCart');
// thanh toán 
Route::get('/thanh-toan-{slug}-{id}',[App\Http\Controllers\Frontend\FrontendController::class , 'showFormPayment'])->name('showFormPayment');
Route::post('/thanh-toan',[App\Http\Controllers\Frontend\FrontendController::class , 'sendOrder'])->name('sendRequest');

Route::get('/blog',[App\Http\Controllers\Frontend\FrontendController::class, 'blog'])->name('blog');