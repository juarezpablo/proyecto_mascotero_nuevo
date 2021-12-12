<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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


Route::get('/login', [SessionController::class,'index' ]);
Route::post('/login', [SessionController::class,'store']);
Route::get('/registro',[RegistroController::class,'index'] );
Route::post('/registro',[RegistroController::class,'store' ]);

Route::resource('usuario', UsuarioController::class);
Route::resource('admin', AdminController::class);

/* Route::get('/usuario/{$usuarioParametro}', 'UsuarioController@index')->name('usuario');*/
 Route::post('admin/usuario', [AdminController::class,'admin.usuarios'])->name('admin.usuarios');


