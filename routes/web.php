<?php

use App\Http\Controllers\kategori_bencanacontroller;
use App\Http\Controllers\kotacontroller;
use App\Http\Controllers\userscontroller;
use App\Http\Controllers\provinsicontroller;
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
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('layouts.index');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/users', [userscontroller::class, 'users']);

Route::get('/provinsi', [provinsicontroller::class, 'provinsi']);

Route::get('/kategori_bencana', [kategori_bencanacontroller::class, 'kategori_bencana']);

Route::get('/kota', [kotacontroller::class, 'kota']);

Route::get('/tambahprovinsi', [provinsicontroller::class, 'tambahdataprovinsi']);
Route::post('/tambahdata/provinsi', [provinsicontroller::class, 'simpandataprovinsi']);
Route::post('/hapusprovinsi', [provinsicontroller::class, 'hapusprovinsi']);
Route::post('/editprovinsi', [provinsicontroller::class, 'editprovinsi']);
Route::post('/editdata/provinsi', [provinsicontroller::class, 'updateprovinsi']);
