<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Products endpoint
/*Route::get('products', [ProductsController::class,  'listProducts']);
Route::get('product/{id}', [APIController::class,  'product']);*/

// Carts endpoint
/*Route::get('carts', [APIController::class,  'listCarts']);
Route::get('cart/{id}', [APIController::class,  'cart']);*/

Route::resource('products', 'ProductsController');

Route::prefix('products')->group(function () {
    Route::post('add', [ProductsController::class,  'addToCart'])->name('products.add');
});

Route::resource('carts', 'CartsController');
