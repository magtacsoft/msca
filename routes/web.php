<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
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

Route::get('/'  , [FrontController::class , 'home'])->name('index');
Route::get('about', [FrontController::class , 'about'])->name('about');
Route::get('services', [FrontController::class, 'service'])->name('services');
Route::get('projects', [FrontController::class, 'projects'])->name('projects');
Route::get('beton-zavod', [FrontController::class, 'betonzavod'])->name('neton-zavod');
Route::get('ekin-saheleri', [FrontController::class, 'ekinSaheleri'])->name('ekin-saheleri');
Route::get('agro-servis', [FrontController::class, 'agro'])->name('agro-servis');
Route::get('contact', [FrontController::class, 'contact'])->name('contact');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
