<?php

use Faker\Guesser\Name;
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

// Route::get('/', function () {
//     return view('index');
// });    

//Route::get('/', 'TodoController@index')->name('todo');


Route::get('/', 'App\Http\Controllers\TodoController@index')->name('index');
Route::get('/add', 'App\Http\Controllers\TodoController@add')->name('add');
Route::post('/added', 'App\Http\Controllers\TodoController@added')->name('added');
Route::get('/edit/{id}', 'App\Http\Controllers\TodoController@edit')->name('edit');
Route::post('/edited', 'App\Http\Controllers\TodoController@edited')->name('edited');
Route::get('/delete/{id}', 'App\Http\Controllers\TodoController@delete')->name('delete');