<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProduittController;
use App\Http\Controllers\Frontend\FrontendContoller;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\DashbordController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\componentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontendContoller::class, 'index']);
Route::get('categorie', [FrontendContoller::class, 'categorie']);
Route::get('view-categorie/{slug}', [FrontendContoller::class, 'viewcategorie']);
Route::get('view-categorie/{cate_slug}/{prod_slug}', [FrontendContoller::class, 'produitview']);
Auth::routes();

Route::post('add-to-cart',[CartController::class, 'addproduct']);
Route::post('delete-cart',[CartController::class, 'deleteproduct']);
Route::post('update-cart',[CartController::class, 'updateproduit']);
Route::get('add-to-liste',[WishlistController::class,'add']);


Route::middleware(['auth'])->group(function(){
Route::get('cart',[CartController::class, 'viewcart']);
Route::get('checkout',[CheckoutController::class, 'index']);
Route::post('place-order',[CheckoutController::class, 'placeorder']);
Route::get('my-orders',[UserController::class, 'index']);
Route::get('viewordre/{id}',[UserController::class, 'view']);
Route::get('wishlist',[WishlistController::class,'index']);

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth', 'isAdmin'])->group(function () {
        Route::get('/dashboard','Admin\FrontendController@index');
        Route::get('categories', 'Admin\CategoryController@index');
        Route::get('add-category','Admin\CategoryController@add');
        Route::post('insert-category', 'Admin\CategoryController@insert');
        Route::get('edit-prod/{id}', [CategoryController::class, 'edit']);
        Route::get('voir-prod/{id}', [CategoryController::class, 'voir']);
        Route::put('update-category/{id}',[CategoryController::class, 'update']);
        Route::get('delete-category/{id}', [CategoryController::class, 'destroy']);

        Route::get('produit', [ProduittController::class, 'index']);
        Route::get('add-produit', [ProduittController::class, 'add']);
        Route::post('insert-produit', [ProduittController::class, 'insert']);

        Route::get('edit-produit/{id}',[ProduittController::class, 'edit']);
        Route::get('update-produit/{id}', [ProduittController::class, 'update']);
        Route::get('delete-produit/{id}',[ProduittController::class, 'destroy']);


        Route::get('orders',[OrderController::class, 'order']);

        Route::get('admin/viewordre/{id}',[OrderController::class, 'view']);
        Route::put('update-order/{id}',[OrderController::class, 'updateorder']);
        Route::get('order-history',[OrderController::class, 'orderhistory']);

        Route::get('users',[DashbordController::class, 'users']);
        Route::get('view-users/{id}',[DashbordController::class, 'viewusers']);
    });

    Route::get('components/listproduits/{name}', [componentController::class, 'searchProd'])->name('components.listproduits');