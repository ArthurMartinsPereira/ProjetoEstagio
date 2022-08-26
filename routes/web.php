<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\MainController;
use app\Http\Controllers\LabsController;
use App\Http\Controllers\EventController;
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

Route::get('/Solicitações', function () {
    return view('Solicitações');
});

Route::get('/Calendário', function () {
    return view('Calendar');
});


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
Route::get('Lab-07','LabsController@index7');
Route::get('Lab-08','LabsController@index8');

Route::get('Solicitações','LabsController@index9');


Route::post('solicitação', 'LabsController@store');

Route::get('calendar', [EventController::class, 'index'])->name('calendar.index');
Route::post('calendar/create-event', [EventController::class, 'create'])->name('calendar.create');
Route::patch('calendar/edit-event', [EventController::class, 'edit'])->name('calendar.edit');
Route::delete('calendar/remove-event', [EventController::class, 'destroy'])->name('calendar.destroy');
/*  Route::get('Agenda-01','AgendaController@index');  */

/* Route::resource('/Solicitações','SolicitaçõesController');  */

/*Route::get('login',[MainController::class, 'login']) ->name('login');
Route::post('check', [MainController::class], 'check') ->name('check');*/


   /* Route::get('/loginGerente','LoginGerenteController@show_login_form')->name('LoginGerente');
    Route::post('/loginGerente','LoginGerenteController@process_login')->name('LoginGerente');
    Route::post('/logoutGerente','LoginGerenteController@logout')->name('logout'); */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
