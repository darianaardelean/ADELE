<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\StripePaymentController;


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



Auth::routes();

Route::get('/', [ProductController::class, 'productList'])->name('productslist');
Route::get('/users', [UserController::class, 'usersList'])->name('usersList')->middleware('Auth');
Route::delete('/users/delete/{id}', [UserController::class, 'deleteUser'])->name('deleteUser')->middleware('Auth');
Route::put('/users/edit/{id}', [UserController::class, 'updateUser'])->name('updateUser')->middleware('Auth');
Route::get('/products/{id}', [ProductController::class, 'singleProduct'])->name('singleProduct')->middleware('Auth');
Route::post('/', [ProductController::class, 'insertNewProduct'])->name('addAProduct')->middleware('Auth');
Route::put('/products/{id}', [ProductController::class, 'updateProduct'])->name('updateTheProduct')->middleware('Auth');
Route::delete('/products/{id}', [ProductController::class, 'deleteProduct'])->name('deleteTheProduct')->middleware('Auth');
Route::get('/carts', [CartController::class, 'getItemsFromCart'])->name('carts')->middleware('Auth');
Route::delete('/carts/delete/{id}', [CartController::class, 'deleteItemFromCart'])->name('cartsDelete')->middleware('Auth');
Route::post("/products/addProduct/{id}", [CartController::class, 'addItemToCart'])->name('addProductToCart')->middleware('Auth');
Route::get('checkout', [CheckoutController::class,'index']);
Route::post('place-order',[CheckoutController::class, 'placeorder']);
Route::get('/orders', [OrderController::class,'getPastOrders'])->name('orders');
Route::get('stripe', [StripePaymentController::class, 'stripe']);
Route::post('stripe', [StripePaymentController::class, 'stripePost'])->name('stripe.post');
Route::delete('/orders/delete/{id}', [OrderController::class, 'deleteItemFromOrder'])->name('ordersDelete')->middleware('Auth');
