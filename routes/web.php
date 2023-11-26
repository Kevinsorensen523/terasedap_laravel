<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\FoodItemController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\CategoryController;

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
    return redirect('menu');
});

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

Route::resource('categories', CategoryController::class);
Route::get('/menu', [MenuController::class, 'showMenu']);

Route::get('/add-food-item', [FoodItemController::class, 'createForm']);
Route::get('/add-food-item', [FoodItemController::class, 'addFoodItemView']);
Route::post('/add-food-item', [FoodItemController::class, 'store'])->name('fooditem.store');

Route::get('/edit_food_item/{id}/edit', [FoodItemController::class, 'editForm'])->name('food-item.edit');
Route::put('/edit_food_item/{id}', [FoodItemController::class, 'update'])->name('food-item.update');

Route::get('/food-items', [FoodItemController::class, 'displayAll'])->name('food-items');

Route::get('/fooditem/{id}/description', [FoodItemController::class, 'showDescription'])->name('fooditem.description');
Route::delete('/add-food-item/{id}', [FoodItemController::class, 'destroy'])->name('food_items.destroy');

// Route for displaying the edit form for a food item
Route::get('/add-food-item/{id}/edit', [FoodItemController::class, 'editForm'])->name('food_items.editForm');




Route::post('/add-to-cart/{name}/{id}/{price}', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');

Route::post('/confirm-order', [CartController::class, 'confirmOrder'])->name('confirmOrder');
Route::get('/show-order', [CartController::class, 'showOrder'])->name('showOrder');

Route::get('/show-order', [CartController::class, 'showOrder'])->name('orders.show');


Route::delete('/orders/{id}', [CartController::class, 'destroy'])->name('orders.destroy');

Route::get('/show-order-history', [CartController::class, 'showOrderHistories'])->name('order.show');

Route::get('/show-order-history', [CartController::class, 'showOrderHistories'])->name('orders.history');
