<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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
Route::get('/home', [PagesController::class, 'home' ])->name('home');

Route::get('/overons', [PagesController::class, 'overons' ])->name('overons');

Route::get('/contact', [PagesController::class, 'contact' ])->name('contact');
