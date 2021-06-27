<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\PortafolioController;
use App\Http\Controllers\ProjectController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Ruta Login
Route::get('/admin', function () {
    return view('auth.login');
});

// Ruta para quitar el Register en produccion... Deshabilitarla en desarrollo
// Route::get('/register', function () {
//     return view('auth.login');
// });

// Ruta principal
Route::get('/', [PortafolioController::class, 'index'])->name('portafolio.index');
Route::get('/work/{project}', [PortafolioController::class, 'show'])->name('portafolio.show');

// Ruta envio mails
Route::post('/mail', [MailController::class, 'getMail'])->name('mail');

// Ruta de administracion de proyectos
Route::group(['middleware' => 'auth'], function() {

    Route::group(['prefix' => 'project'], function() {
        
        Route::get('/create', function () {
            return view('admin.project.create');
        });

        Route::get('/', [ProjectController::class, 'index'])->name('project.index');
        Route::post('/create', [ProjectController::class, 'create'])->name('project.create');
        Route::get('/{project}', [ProjectController::class, 'show'])->name('project.show');
        Route::get('/{project}/edit', [ProjectController::class, 'edit'])->name('project.edit');
        Route::put('/{project}', [ProjectController::class, 'update'])->name('project.update');
        Route::delete('/{project}', [ProjectController::class, 'destroy'])->name('project.destroy');

    });
    
});