<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todocontroller;

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
});
Route::get('/todo',[todocontroller::class,'todo_list'])->name('list');
Route::post('/store',[todocontroller::class,'todo_store'])->name('store');
Route::get('/edit_list/{id}',[todocontroller::class,'edit_list'])->name('edit');
Route::put('/update_list',[todocontroller::class,'update'])->name('update');
Route::delete('/delete/{id}',[todocontroller::class,'deletelist'])->name('deleteitem');



