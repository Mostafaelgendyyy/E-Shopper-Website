<?php

use App\Http\Controllers\CheckoutTransactionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoopingCartController;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    $categories = DB::table('categories')->get();
    $products = DB::table('products')->get();
    return view('UserHome',[
            'categories'=>$categories,
            'products'=>$products
        ]
    );
});


Route::get('/return',[UserController::class,'returned']);

Auth::routes();

Route::get('/home', function () {
    $categories = DB::table('categories')->get();
    $products = DB::table('products')->get();
    return view('UserHome',[
            'categories'=>$categories,
            'products'=>$products
        ]
    );
})->name('home');

Route::get('/search/', [\App\Http\Controllers\SearchController::class,'search'])->name('search');

Route::get('/shop', function () {
    $categories = DB::table('categories')->get();
    $products = DB::table('products')->get();
    return view('shop',[
            'categories'=>$categories,
            'products'=>$products
        ]
    );
})->name('shop');

//Route::get('/detail', function () {
//    $categories = DB::table('categories')->get();
//    return view('detail',[
//            'categories'=>$categories
//        ]
//    );
//})->name('detail');

Route::get('/detail/{id}', function ($id) {
    $products=  product::query()
        ->where('id', '=', $id)->get();
    $categories = DB::table('categories')->get();
    return view('detail',[
            'categories'=>$categories,
            'products'=>$products
        ]
    );
})->name('detail');


Route::get('/category', function () {
    $categories = DB::table('categories')->get();
    $products=  product::query()
        ->where('id', '=', 1)->get();
    return view('category',[
            'categories'=>$categories,
            'products'=>$products
        ]
    );
})->name('category');


Route::get('/CategoryProducts/{id}', function ($id) {
    $categoryproducts=  \App\Models\Category::query()
        ->where('id', '=', $id)->get();
    $categories = DB::table('categories')->get();
    $products=null;
    foreach ($categoryproducts as $k => $value){
        $products=  product::query()
            ->where('categoryid', '=', $value->id)->get();
    }
    return view('category',[
            'categories'=>$categories,
            'products'=>$products
        ]
    );
})->name('CategoryProducts');

//Route::get('/cart', function () {
//    $categories = DB::table('categories')->get();
//    return view('cart',[
//            'categories'=>$categories
//        ]
//    );
//})->name('cart');


Route::get('/checkout',[\App\Http\Controllers\CheckoutTransactionController::class,'checkout'])->name('checkout');

Route::get('/contact', function () {
    $categories = DB::table('categories')->get();
    return view('contact',[
            'categories'=>$categories
        ]
    );
})->name('contact');



//Route::get('/e', [ProductController::class, 'productList'])->name('products.list');
Route::get('cart', [ShoopingCartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [ShoopingCartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [ShoopingCartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [ShoopingCartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [ShoopingCartController::class, 'clearAllCart'])->name('cart.clear');

Route::post('/createCheckout',[CheckoutTransactionController::class,'store'])->name('placeOrder.add');
