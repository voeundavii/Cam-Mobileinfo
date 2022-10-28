<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\NavigateController;
use App\Http\Controllers\SmartController;
use App\Http\Controllers\SeatelController;
use App\Http\Controllers\cooltelController;
use App\Http\Controllers\MetfoneController;
use App\Http\Controllers\CellcardController;
use App\Http\Controllers\DetailController;

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
    return view('home');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Backend
Route::group(['prefix' => 'admin', 'middleware' => ['auth','isAdmin']], function () {
    Voyager::routes();
});


//comapny service route
Route::get('/smart', [SmartController::class, 'smart']);
Route::get('/seatel', [SeatelController::class, 'seatel']);
Route::get('/cellcard', [CellcardController::class, 'cellcard']);
Route::get('/metfone', [MetfoneController::class, 'metfone']);
Route::get('/cooltel', [CooltelController::class, 'cooltel']);

// navigate route

Route::get('/mobile-app', [NavigateController::class, 'mobileApp']);
Route::get('/about', [NavigateController::class, 'about']);

// detail route
Route::get('/detail/{id}', [DetailController::class, 'detail']);