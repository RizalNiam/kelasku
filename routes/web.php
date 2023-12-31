<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|----sss----------------------------------------------------------------------
| Web Routes Test
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

Route::get('index', function () {return view('awal');});
Route::get('login', function () {return view('login');});
Route::get('daftar', function () {return view('daftar');});
Route::post('prosesdaftar', [AdminController::class,'register']);
