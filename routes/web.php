<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\MascotasController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\UsuariosController;
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
Route::get('admin/usuario', [AdminController::class,'conseguir_usuarios'])->name('admin.conseguir_usuarios');
Route::resource('admin', AdminController::class);

/* Route::get('/usuario/{$usuarioParametro}', 'UsuarioController@index')->name('usuario');*/
 /*Route::get('admin/usuario', [AdminController::class,'admin.lista_usuarios'])->name('admin.lista_usuarios');*/
 Route::get('formularios/actualizar', [FormularioController::class,'asignar_adopcion'])->name('formulario.asignar_adopcion');
 Route::resource('formularios', FormularioController::class);
 Route::resource('mascotas', MascotasController::class);





