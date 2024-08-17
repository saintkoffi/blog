<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
 Route::get('/', function () {
     return view('welcome');
 });
 Route::resource('clients', ClientController::class);

 Route::get('/', function () {
     return view('layouts.modals');
 });
 //formulaire d'ajout,d'édition

 Route::get('/new', function () {
     return view('layouts.create'); 
});

Route::post('/new', function () {
    return view('layouts.store');
});
