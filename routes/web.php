<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\MainController;
use app\Http\Controllers\LabsController;
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

Route::get('/Labs', function () {
    return view('Lab-01');

});
Route::get('/Labs', function () {
    return view('Lab-02');
});

Route::get('Lab-01','LabsController@index');
Route::get('Lab-02','LabsController@index2');
Route::get('Lab-03','LabsController@index3');
Route::get('Lab-04','LabsController@index4');
Route::get('Lab-05','LabsController@index5');
Route::get('Lab-06','LabsController@index6');

/*Route::get('login',[MainController::class, 'login']) ->name('login');
Route::post('check', [MainController::class], 'check') ->name('check');*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
