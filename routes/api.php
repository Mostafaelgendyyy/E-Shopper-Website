<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutTransactionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoopingCartController;
use App\Http\Controllers\UserController;
use App\Models\TransactionLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// USER
Route::post('/create',[UserController::class,'store']);

Route::get('/user/{id?}',[UserController::class,'show']);

Route::post('/Update/{id}',[UserController::class,'update']);

Route::delete('/deleteuser/{id}',[UserController::class,'destroy']);

Route::get('/home',[UserController::class,'home']);

//Category
Route::post('/createCategory',[CategoryController::class,'store']);

Route::get('/Category/{id?}',[CategoryController::class,'show']);

Route::post('/UpdateCategory/{id}',[CategoryController::class,'update']);

Route::delete('/deleteCategory/{id}',[CategoryController::class,'destroy']);

Route::get('allCategories',[CategoryController::class,'showAll']);

Route::get('ProductsNumber/{id}',[ProductController::class,'productsnumber'])->name('products');


// PRODUCT

Route::post('/createProduct',[ProductController::class,'store']);

Route::get('/Product/{id?}',[ProductController::class,'show']);

Route::post('/UpdateProduct/{id}',[ProductController::class,'update']);

Route::delete('/deleteProduct/{id}',[ProductController::class,'destroy']);

Route::get('/search/{name}',[ProductController::class,'searchbyCategory']);

Route::get('/searchSimilar/{prName}',[ProductController::class,'searchlike']);

//Checkout
//Route::post('/createCheckout',[CheckoutTransactionController::class,'store'])->name('placeOrder.add');

Route::get('/Checkout/{id?}',[CheckoutTransactionController::class,'show']);

Route::post('/UpdateCheckout/{id}',[CheckoutTransactionController::class,'update']);

Route::delete('/deleteCheckout/{id}',[CheckoutTransactionController::class,'destroy']);

