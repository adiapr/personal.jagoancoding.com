<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesController;

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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/add', [TesController::class, 'addTes'])->name('add');
Route::post('carihasil', [TesController::class, 'cariHasil'])->name('carihasil');

// DOWNLOAD PDF
Route::post('/download', [TesController::class, 'pdf'])->name('download');
