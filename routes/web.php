<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inscription', [App\Http\Controllers\UserController::class, 'UserView'])->name('users.create');
Route::post('/inscription', [App\Http\Controllers\UserController::class, 'accueil'])->name('accueil');

Route::get('/connexion', [App\Http\Controllers\ConnexionControler::class, 'formulaire'])->name('formulaire');
Route::post('/connexion', [App\Http\Controllers\ConnexionControler::class, 'traitement'])->name('formulaire');
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cv',[App\Http\Controllers\CvController::class, 'creation'])->name('creation');
Route::post('/cv', [App\Http\Controllers\CvController::class, 'PageA'])->name('pagea');

Route::view('/mon-compte', 'mon-compte');

Route::get('/affiche', [App\Http\Controllers\AfficheController::class, 'affcv' ])->name('aff_cv');
Route::get('/display/(id)', [App\Http\Controllers\AfficheController::class, 'displayOne'])->name('disOne');