<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\main;
use App\Http\Controllers\HomeController;




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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/catalog/{id}', [main::class, 'show']);
Route::get('/catalog/item/{id}', [main::class, 'item']);
Route::get('/catalog', [main::class, 'catalog']);
Route::get('/contact', [main::class, 'contact']);
Route::get('/search', [main::class, 'search'])->name('product.search');
Route::post('/send_mail', [main::class, 'send_mail']);
Route::get('/reviews', [main::class, 'reviews']);
Route::get('/works', [main::class, 'works']);
Route::get('/catalog_works/{id}', [main::class, 'catalog_works']);

Route::get('/test', [main::class, 'show_test']);


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin', [HomeController::class, 'admin'])->middleware('auth')->name('admin');
Route::post('/add', [HomeController::class, 'add'])->middleware('auth')->name('product.store');
Route::post('/add_works', [HomeController::class, 'add_works'])->middleware('auth')->name('works.store');
Route::get('/search/admin', [HomeController::class, 'search_admin'])->middleware('auth')->name('product.search.admin');
Route::post('/delete/{id}', [HomeController::class, 'delete'])->middleware('auth');
Route::post('/update', [HomeController::class, 'update'])->middleware('auth')->name('product.update');
