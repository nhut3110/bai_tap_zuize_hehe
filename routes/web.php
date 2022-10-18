<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\helloController;
use App\Http\Controllers\sumController;

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
Route::get('/huhu', function () {
    return view('huhu');
}) ->name("huhu");
Route::get('/hehe', [helloController::class, 'getHehe'])->name("hehe");
Route::get('calcSum', function(){
    return view('sum');
});
Route::post('calcSum', [sumController::class, 'calculation']);