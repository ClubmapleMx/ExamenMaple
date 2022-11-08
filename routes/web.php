<?php

use Illuminate\Support\Facades\Route;

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

// call the main view home
Route::get('/', function () {
    return redirect('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

//change to call controller BooksController
Route::get('/home', [App\Http\Controllers\BooksController::class, 'index'])->name('home');

//api to query information using ajax
Route::get('/api/books', [App\Http\Controllers\BooksController::class, 'api'])->name('api.books');


