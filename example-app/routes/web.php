<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\ProcessClient;
use App\Http\Controllers\admin\DashBoardController;
use App\Http\Controllers\admin\ProcessAdmin;
use App\Http\Controllers\Configs;
use App\Http\Controllers\ProcessConfigs;

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

Route::get('/search', [Configs::class, 'search'])->name('search');
Route::get('/searchAges', [Configs::class, 'searchAges']);
Route::get('/allProducts', [Configs::class, 'allProducts']);
Route::get('/logout', [ProcessConfigs::class, 'processLogout']);
Route::get('/mail', [ProcessConfigs::class, 'sendEmail'])->name('mail');
Route::get('/titleProduct', [HomeController::class, 'titleProduct']);


Route::middleware('check.user')->prefix('/')->group(function (){
    Route::middleware('check.user')->get('/', [HomeController::class, 'index'])->name('home');
    Route::middleware('check.user')->get('/login', [HomeController::class, 'login'])->name('login');
    Route::middleware('check.user')->post('/processlogin', [ProcessConfigs::class, 'processLogin']);  
    Route::get('/register', [HomeController::class, 'register']);
    Route::post('/processregister', [ProcessConfigs::class, 'processRegister']);
});

Route::middleware('check.user:client')->prefix('client')->group(function (){
    Route::get('/', [HomeController::class, 'index'])->name('client');
    Route::get('/cart', [HomeController::class, 'cart']);
    Route::get('/cart/add', [ProcessConfigs::class, 'addCart']);
    Route::get('/cart/delete', [ProcessConfigs::class, 'deleteCart']);
});

Route::middleware('check.user:admin')->prefix('admin')->group(function (){
    Route::get('/', [DashBoardController::class, 'index'])->name('admin');
    Route::get('/product', [DashBoardController::class, 'product']);
    Route::get('/product/add', [DashBoardController::class, 'addProduct']);
    Route::get('/product/update', [DashBoardController::class, 'updateProduct']);
    Route::get('/product/delete', [DashBoardController::class, 'deleteProduct']);
    Route::post('/product/add', [ProcessAdmin::class, 'addProduct']);
    Route::post('/product/update', [ProcessAdmin::class, 'updateProduct']);
});