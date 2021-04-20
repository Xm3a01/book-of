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

Route::get('/', 'Front\BookController@index');
Route::get('/find', 'Front\BookController@show');
Route::get('/details/{book}', 'Front\BookController@details')->name('details');


Route::get('/test', function () {
    $file_path = 'file/file.pdf';
    return response()->file($file_path);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
