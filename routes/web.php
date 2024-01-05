<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Models\product;
use Faker\Provider\Lorem;
use Faker\Provider\HtmlLorem;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductUserController;
use App\Http\Controllers\UserController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Middleware\CheckRole;
use Illuminate\Routing\RouteGroup;
use App\Http\Controllers\PurchaseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


/*
    Project web framework
*/

Route::get('/', function () {
    
    return view('login.index',[
        'title' => 'Login'
       ] );
});


/*Controler */



// login

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);





//dasboard admin
Route::group(['middleware' => ['auth','ceklevel:admin']], function(){
    // User data 
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    Route::delete('/delete/user{id}', [AdminController::class, 'destroy'])->name('delete.user');

    // Penjualan - admin
    Route::get('/adminPenjualan', [AdminController::class, 'adminPenjualan'])->name('admin');
    Route::delete('/delete/penjualan/{id}', [AdminController::class, 'destroyPenjualan'])->name('delete.penjualan');

    // product - admin
    Route::get('/adminProducts', [AdminController::class, 'adminProduct'])->name('products.index');
    Route::get('/createProducts', [AdminController::class, 'create']);
    Route::post('/adminProducts', [AdminController::class, 'store'])->name('products.store');
    Route::delete('/delete/product/{id}', [AdminController::class, 'destroyProduct'])->name('delete.product');

});

Route::group(['middleware' => ['auth','ceklevel:user']], function(){
    // dasboard user
    Route::get('/user', [UserController::class, 'user']);

    Route::get('/user/edit/{id}', [UserController::class, 'edit']);
    Route::put('/user/{id}', [UserController::class, 'update']);

    Route::get('/order', [UserController::class, 'order']);
    Route::get('/help', [UserController::class, 'help']);
});


// HOMEPAGE

Route::group(['middleware' => ['auth','ceklevel:admin,user']], function(){
    // home
    Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
    Route::get('/history', [HistoryController::class, 'index']);

    // product
    Route::get('/products', [ProductController::class, 'index'])->middleware('auth');
    Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
    
    // pembelian
    Route::get('/products', [ProductController::class, 'index'])->name('product.index');
    Route::get('/purchased-products', [PurchaseController::class, 'viewPurchasedProducts'])->name('purchased-products.index');
    Route::post('/products/{productId}/purchase', [PurchaseController::class, 'purchaseProduct'])->name('product.purchase');

    
    // dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);
    
    Route::get('/useredit', [DashboardController::class, 'update']);
    Route::post('/useredit', [DashboardController::class, 'authenticate']);
});









