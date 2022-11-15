<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\MainController;
use app\Http\Controllers\LabsController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegisterController;
use app\Http\Controllers\LabsGerenteController;
use app\Http\Middleware\AdminsOnly;
use app\Http\Kernel;
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

/* Fora de uso

Route::get('Lab-01','LabsController@index');
Route::get('Lab-02','LabsController@index2');
Route::get('Lab-03','LabsController@index3');
Route::get('Lab-04','LabsController@index4');
Route::get('Lab-05','LabsController@index5');
Route::get('Lab-06','LabsController@index6');
Route::get('Lab-07','LabsController@index7');
Route::get('Lab-08','LabsController@index8');


Route::get('LabGerente-01','LabsGerenteController@index')->middleware('admin');
Route::get('LabGerente-02','LabsGerenteController@index2')->middleware('admin');
Route::get('LabGerente-03','LabsGerenteController@index3')->middleware('admin');
Route::get('LabGerente-04','LabsGerenteController@index4')->middleware('admin');
Route::get('LabGerente-05','LabsGerenteController@index5')->middleware('admin');
Route::get('LabGerente-06','LabsGerenteController@index6')->middleware('admin');
Route::get('LabGerente-07','LabsGerenteController@index7')->middleware('admin');
Route::get('LabGerente-08','LabsGerenteController@index8')->middleware('admin');
*/

Route::get('/Solicitações', function () {
    return view('Solicitações');
});


/*
Route::get('/Calendário', function () {
    return view('Calendar');
});
*/

Route::get('/erro', function () {
    return view('Erro');
});

Route::get('/', function () {
    return view('welcome');
});

//Laboratórios dos Usuários Comuns
Route::get('LabsInfo/{id}','LabsGerenteController@index2');
Route::get('LabsAgenda','LabsController@index11');
Route::get('LabsProfAgenda/{id}','LabsGerenteController@index13');

Route::get('Solicitações','LabsController@index9');
Route::post('solicitação', 'LabsController@store');


Route::get('GerenciarSolicitações','SolicitaçõesController@index10')->middleware('admin');
Route::get('Gerente.Resposta/{id}','SolicitaçõesController@edit')->middleware('admin');
Route::put('Gerente.Responder/{id}','SolicitaçõesController@update')->name('Gerente.Responder')->middleware('admin');
Route::get('GerenciarSolicitaçõesExtra','SolicitaçõesController@index11')->middleware('admin');
Route::get('Gerente.Resposta2/{id}','SolicitaçõesController@edit2')->middleware('admin');
Route::put('Gerente.Responder2/{id}','SolicitaçõesController@update2')->name('Gerente.Responder2')->middleware('admin');
Route::get('GerenciarSolicitaçõesDeletar','SolicitaçõesController@index12')->middleware('admin');
Route::delete('Gerente.DeletarSolicitação/{id}','SolicitaçõesController@destroy')->middleware('admin');

//Laboratórios do Gerente
Route::get('/LabsGerente','LabsGerenteController@index14')->middleware('admin');
Route::get('LabsGerenteInfo/{id}','LabsGerenteController@index15')->middleware('admin');

Route::get('LabsAgendaGerente','LabsGerenteController@index11')->middleware('admin');
Route::get('LabsAgendaInfo/{id}','LabsGerenteController@index12')->middleware('admin');

Route::get('Gerente.Index','LabsGerenteController@index9')->middleware('admin');
Route::get('Gerente.Editar/{id}','LabsGerenteController@edit')->middleware('admin');
Route::put('Gerente.Update/{id}','LabsGerenteController@update')->name('Gerente.Update')->middleware('admin');
Route::get('Gerente.CriarLab','LabsGerenteController@index8')->middleware('admin');
Route::post('Gerente.CriarComplete','LabsGerenteController@store')->middleware('admin');
Route::get('Gerente.DeletarLaboratório','LabsGerenteController@index7')->middleware('admin');
Route::delete('Gerente.DeletarLab/{id}','LabsGerenteController@destroy')->middleware('admin');


Route::get('Calendário', [EventController::class, 'index12']);
Route::get('calendar', [EventController::class, 'index'])->name('calendar.index');
Route::get('calendar/solicitação', [LabsController::class, 'store'])->name('solicitação.store');
Route::post('calendar/create-event', [EventController::class, 'create'])->name('calendar.create');
Route::patch('calendar/edit-event', [EventController::class, 'edit'])->name('calendar.edit');
Route::delete('calendar/remove-event', [EventController::class, 'destroy'])->name('calendar.destroy');

Route::get('CalendárioGerente', [EventController::class, 'index2'])->name('CalendárioGerente.index2')->middleware('admin');
Route::post('CalendárioGerente/create-event', [EventController::class, 'create2'])->name('CalendárioGerente.create2')->middleware('admin');
Route::patch('CalendárioGerente/edit-event', [EventController::class, 'edit2'])->name('CalendárioGerente.edit2')->middleware('admin');
Route::delete('CalendárioGerente/remove-event', [EventController::class, 'destroy2'])->name('CalendárioGerente.destroy2')->middleware('admin');

Route::get('/CalendárioGerente', function () {
    return view('CalendárioGerente');
})->middleware('admin');
/*  Route::get('Agenda-01','AgendaController@index');  */

/* Route::resource('/Solicitações','SolicitaçõesController');  */

/*require __DIR__.'/auth.php'; */

/*Route::get('login',[MainController::class, 'login']) ->name('login');
Route::post('check', [MainController::class], 'check') ->name('check');*/

Route::get('register', [RegisterController::class], 'create');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

