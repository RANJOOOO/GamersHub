<?php
use App\Mail\HelloMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\Buyers;
use resources\views\view;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\mailcontroller;
use App\Http\Controllers\labcontroller;
use App\Http\Controllers\productController;
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


//Buyer Controller


Route::get('/', function () {
    return view('main');
});
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('index', function () {
    return view('index');
});


Route::middleware('auth')->group(function(){
    Route::get('store', [Buyers::class,'see']);
    Route::post('store', [Buyers::class,'create']);
    Route::get('img', [Buyers::class,'see_img']);
    Route::post('img', [Buyers::class,'upload_img']);
    Route::get('adding_seller', [SellerController::class,'see']);
    Route::post('adding_seller', [SellerController::class,'create']);
    Route::get('items', [productController::class,'view_product']);
    Route::post('items', [productController::class,'create_product']);
    Route::get('updateproduct/{id}', [productController::class,'editproduct']);
    Route::post('updateproduct/{Id}', [productController::class,'Post_edit_product']);
    Route::get('deleteproduct/{id}', [productController::class,'deleteproduct']);
});

Route::get('result', [Buyers::class,'view']);


Route::get('view_result', [Buyers::class,'result']);

//seller controller start here

Route::get('view_seller', [SellerController::class,'view_seller']);

//Mail controller

Route::get('mail', [mailcontroller::class,'view_mail']);
Route::post('mail', [mailcontroller::class,'create_mail']);



// for labcontroller routes
Route::get('adding_file', [labcontroller::class,'see']);
Route::post('adding_file', [labcontroller::class,'create']);
Route::get('check_file', [labcontroller::class,'viewPdf']);
Route::get('download_file/{file}', [labcontroller::class,'download']);


//Product Controller
Route::get('items_display', [productController::class,'see_product']);
Route::get('item_detail/{Id}', [productController::class,'detail_product']);
// checking for relations
Route::get('manyrelation', [productController::class,'relation']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
