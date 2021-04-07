<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\Auth\LoginController;


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


/*Route::get('/', function () {
    return view('/daftar');
});*/

Route::get('/', function () {
    return view('home');
})->name('landingPage');

Route::get('/daftar', function () {
    return view('daftar');
});

//Route::get('/', [App\Http\Controllers\BiodataController::class, 'daftar']);
Route::get('/biodatas/downloadPDF', [App\Http\Controllers\BiodataController::class, 'downloadPDF']);
Route::get('/biodatas/print/{id}', [BiodataController::class, 'cetakpdf'])->name('cetakpdf');


Route::resource('biodatas', BiodataController::class);

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

