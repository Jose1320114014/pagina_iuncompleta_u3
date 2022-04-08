<?php

use App\Http\Controllers\APIcontroller;
use App\Http\Controllers\registrocontroler;
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

Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/infohack', [APIcontroller::class, 'index'])->name('infohack');


Route::get('/category',[registrocontroler::class,'mostrarbd'])->name('category');