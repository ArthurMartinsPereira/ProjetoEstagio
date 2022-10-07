<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\MainController;
use app\Http\Controllers\LabsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegisterController;
use app\Http\Controllers\LabsGerenteController;
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

Route::get('/LabsGerente', function () {
    return view('LabsGerente');
});

Route::get('/Calendário', function () {
    return view('Calendar');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('Lab-teste','LabsController@index');


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

Route::get('GerenciarSolicitações','LabsController@index10');


Route::get('LabGerente-01','LabsGerenteController@index');
Route::get('LabGerente-02','LabsGerenteController@index2');
Route::get('LabGerente-03','LabsGerenteController@index3');
Route::get('LabGerente-04','LabsGerenteController@index4');
Route::get('LabGerente-05','LabsGerenteController@index5');
Route::get('LabGerente-06','LabsGerenteController@index6');
Route::get('LabGerente-07','LabsGerenteController@index7');
Route::get('LabGerente-08','LabsGerenteController@index8');
Route::get('Gerente.Index','LabsGerenteController@index9');
Route::get('Gerente.Editar/{id}','LabsGerenteController@edit');
Route::put('Gerente.Update/{id}','LabsGerenteController@update')->name('Gerente.Update');

Route::get('calendar', [EventController::class, 'index'])->name('calendar.index');
Route::post('calendar/create-event', [EventController::class, 'create'])->name('calendar.create');
Route::patch('calendar/edit-event', [EventController::class, 'edit'])->name('calendar.edit');
Route::delete('calendar/remove-event', [EventController::class, 'destroy'])->name('calendar.destroy');

Route::get('CalendárioGerente', [EventController::class, 'index2'])->name('CalendárioGerente.index2');
Route::post('CalendárioGerente/create-event', [EventController::class, 'create2'])->name('CalendárioGerente.create2');
Route::patch('CalendárioGerente/edit-event', [EventController::class, 'edit2'])->name('CalendárioGerente.edit2');
Route::delete('CalendárioGerente/remove-event', [EventController::class, 'destroy2'])->name('CalendárioGerente.destroy2');

Route::get('/CalendárioGerente', function () {
    return view('CalendárioGerente');
});
/*  Route::get('Agenda-01','AgendaController@index');  */

/* Route::resource('/Solicitações','SolicitaçõesController');  */

/*require __DIR__.'/auth.php'; */

/*Route::get('login',[MainController::class, 'login']) ->name('login');
Route::post('check', [MainController::class], 'check') ->name('check');*/

Route::get('register', [RegisterController::class], 'create');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

