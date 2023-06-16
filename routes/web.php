<?php
namespace App\Http\Controllers;
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
    return view('welcome');
});

Route::get('/mobil', [MobilController::class, 'index']);
Route::get('/mobil/create', [MobilController::class, 'create']);
Route::post('/mobil/simpan-data', [MobilController::class, 'store']);

Route ::get('/merk', [MerkController::class, 'index']);

Route::get('/merk/edit/{id}',[MerkController::class, 'edit']);
Route::post('/merk/update/{id}', [MerkController::class,'update']);
Route::get('/merk/delete/{id}', [MerkController::class,'delete']);

Route::get('/tipemobil', [TipeMobilConrtoller::class,'index']);
Route::get('/tipemobil/create', [TipeMobilConrtoller::class,'create']);
Route::post('/tipemobil/simpan-data', [TipeMobilConrtoller::class,'store']);
Route::get('/tipemobil/edit/{id}', [TipeMobilConrtoller::class,'edit']);
Route::post('/tipemobil/update/{id}', [TipeMobilConrtoller::class,'update']);
Route::get('/tipemobil/delete/{id}', [TipeMobilConrtoller::class,'delete']);
