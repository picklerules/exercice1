<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudioController;
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
    return view('home');
});

Route::get('/home', [StudioController::class, 'index']);
Route::get('/services', [StudioController::class, 'services']);
Route::get('/portfolio', [StudioController::class, 'portfolio']);
Route::get('/team', [StudioController::class, 'team']);
Route::get('/contact', [StudioController::class, 'contact']);
Route::post('/contact', [StudioController::class, 'contactForm']);