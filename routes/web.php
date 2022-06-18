<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

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
    return view('clients.index');
})->name('home');



Route::resource('clients','ClientController');
Route::resource('l2s','L2Controller');
Route::resource('l3s','L3Controller');
Route::resource('utilisateurs','UtilisateurController');

Route::group([],function(){
    Route::get('/login',function(){
        return view('utilisateurs.login');
    });

    Route::post('/login','UtilisateurController@login')->name('login');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
