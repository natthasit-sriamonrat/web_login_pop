<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BuyerPropertyController;
use App\Http\Controllers\BuyerPropController;
use App\Http\Controllers\SellerPropController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Mail\MyTestMail;

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
    return view('welcome');
})->name('welcome');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// Route::put('buyer_prop/{id}', [App\Http\Controllers\BuyerPropController::class, 'putmatching'])->name('buyer_prop.putmatching');

Route::post('provinces/fetch', [App\Http\Controllers\BuyerPropController::class, 'fetch'])->name('fetch');
Route::post('provinces/amphures', [App\Http\Controllers\BuyerPropController::class, 'amphures'])->name('amphures');
Route::post('bts', [App\Http\Controllers\SellerPropController::class, 'bts'])->name('bts');
Route::post('mrt', [App\Http\Controllers\SellerPropController::class, 'mrt'])->name('mrt');

Route::resource('buyer_prop', BuyerPropController::class);
Route::get('buyer_prop/{id}/matching', [App\Http\Controllers\BuyerPropController::class, 'matching'])->name('buyer_prop.matching');
Route::resource('seller_prop', SellerPropController::class);