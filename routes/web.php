<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;

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
    return view('biodatas.index');
});*/
Route::get('/', [App\Http\Controllers\BiodataController::class, 'index']);
Route::get('/biodatas/downloadPDF', [App\Http\Controllers\BiodataController::class, 'downloadPDF']);

Route::resource('biodatas', BiodataController::class);

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
