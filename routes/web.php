<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\helloController;
use App\Http\Controllers\sumController;
use App\Http\Controllers\groupController;
use App\Http\Controllers\MangController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/huhu', function () {
//     return view('huhu');
// }) ->name("huhu");

// Route::get('/hehe', [helloController::class, 'getHehe'])->name("hehe");

// Route::get('calcSum', function(){
//     return view('sum');
// });

// Route::post('calcSum', [sumController::class, 'calculation']);

// Route::group(['prefix' => 'duan/admin'], function(){
//     Route::get('/user1', [groupController::class, 'user1']);
//     Route::get('/user2', [groupController::class, 'user2']);
//     Route::get('/user3', [groupController::class, 'user3']);
// });

// Route::get('/mang', [MangController::class, 'getStudent']);

// Route::get('/form', [FormController::class, 'getView']);
// Route::post('/form', [FormController::class, 'store']);

// Route::get('/Signup', [SignupController::class, 'getView']);
// Route::post('/Signup', [SignupController::class, 'process']);

Route::get('/', [PageController::class, 'getIndex']);
Route::get('/type/{id}', [PageController::class, 'getProductType']);
Route::get('/detail/{id}', [PageController::class, 'getProductDetail']);
Route::get('/contact', [PageController::class, 'getContact']);
Route::get('/about', [PageController::class, 'getAbout']);


Route::get('add-to-cart/{id}', [PageController::class, 'getAddToCart'])->name('themgiohang');
Route::get('del-cart/{id}', [PageController::class, 'getDelItemCart'])->name('xoagiohang');
Route::get('/register', function(){
    return view('users.register');
});
Route::get('/login', function(){
    return view('users.login');
});
Route::post('/login', [UserController::class, 'Login']);
Route::get('/logout', [UserController::class, 'Logout']);

// Route::get('/register', [UserController::class, 'Register']);
Route::post('/register', [UserController::class, 'Register']);
