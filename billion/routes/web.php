<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BuyerPropertyController;

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

Route::get('buyerpropertyform', [BuyerPropertyController::class, "index"]);
Route::post('add', [BuyerPropertyController::class, "add"]);


// MAIL_MAILER=smtp
// MAIL_HOST=mailhog
// MAIL_PORT=1025
// MAIL_USERNAME=null
// MAIL_PASSWORD=null
// MAIL_ENCRYPTION=null