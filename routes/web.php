<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\MascotasController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\LoginController;

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

// Home
Route::get('/index', function () {
    return view('index');
});
Route::get('/', function () {
    return view('index');
});


// Sección adopta
Route::get('/adopta', [MascotasController::Class, 'adopta']);

// Sección transito
Route::get('/transito',  function () {
    return view('transito');
});


// Sección donacion
Route::get('/dona',  function () {
    return view('dona');
});

// Sección de login
Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/login',[LoginController::class, 'ingresar']);





Route::get('/registro',[RegistroController::class,'index'] );
Route::post('/registro',[RegistroController::class,'store' ]);
Route::resource('/registro',RegistroController::class);

Route::resource('usuario', UsuarioController::class);
Route::get('admin/usuario', [AdminController::class,'conseguir_usuarios'])->name('admin.conseguir_usuarios');

Route::resource('admin', AdminController::class);


 Route::get('formularios/relacion', [FormularioController::class,'usuario_mascota'])->name('formularios.usuario_mascota');

 Route::put('formularios',[FormularioController::class,'rechazar_adopcion'])->name('formularios.rechazar_adopcion');
 Route::get('formularios/asignar',[FormularioController::class,'asignar_gato'])->name('formularios.asignar_gato');
 Route::get('formularios/rechazar',[FormularioController::class,'rechazar_gato'])->name('formularios.rechazar_gato');

 Route::resource('formularios', FormularioController::class);
 Route::resource('mascotas', MascotasController::class);




