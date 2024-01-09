<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\WilayahController;
use App\Http\Controllers\MitraController;

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

Route::group(['middleware' => 'guest'], function() {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'dologin']);

});


Route::group(['middleware' => ['auth', 'checkrole:1,2,3,4,5']], function() {
    Route::GET('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/redirect', [RedirectController::class, 'cek']);
});


Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('user', [UserController::class, 'index'])->name('user.index');
    Route::resource('user', UserController::class);
    Route::get('role', [RoleController::class, 'index'])->name('role.index');
    Route::resource('role', RoleController::class);
    Route::get('wilayah', [WilayahController::class, 'index'])->name('wilayah.index');
    Route::resource('wilayah', WilayahController::class);
    Route::get('mitra', [MitraController::class, 'index'])->name('mitra.index');
    Route::resource('mitra', MitraController::class);
});


Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
    Route::get('/admin', [AdminController::class, 'index']);

});

Route::group(['middleware' => ['auth', 'checkrole:3']], function() {
    Route::get('/manager', [ManagerController::class, 'index']);

});

Route::group(['middleware' => ['auth', 'checkrole:4']], function() {
    Route::get('/marketing', [MarketingController::class, 'index']);

});

Route::group(['middleware' => ['auth', 'checkrole:5']], function() {
    Route::get('/support', [SupportController::class, 'index']);

});
