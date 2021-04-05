<?php

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

// Ruta Login
Route::get('/admin', function () {
    return view('auth.login');
});

// Ruta para quitar el Register en produccion... Habilitarla en desarrollo
// Route::get('/register', function () {
//     return view('auth.login');
// });

// Ruta principal
Route::get('/', [\App\Http\Controllers\PortafolioController::class, 'index'])->name('portafolio.index');
Route::get('/work/{project}', [\App\Http\Controllers\PortafolioController::class, 'show'])->name('portafolio.show');

// Ruta envio mails
Route::post('/mail', [\App\Http\Controllers\MailController::class, 'getMail'])->name('mail');

// Ruta de administracion de proyectos
Route::middleware('auth')->group(function () {

    Route::get('/project', [\App\Http\Controllers\ProjectController::class, 'index'])->name('project.index');
    Route::get('/project/create', function () {
        return view('admin.project.create');
    });
    Route::post('/project/create', [\App\Http\Controllers\ProjectController::class, 'create'])->name('project.create');
    Route::get('/project/{project}', [\App\Http\Controllers\ProjectController::class, 'show'])->name('project.show');
    Route::get('/project/{project}/edit', [\App\Http\Controllers\ProjectController::class, 'edit'])->name('project.edit');
    Route::put('/project/{project}', [\App\Http\Controllers\ProjectController::class, 'update'])->name('project.update');
    Route::delete('/project/{project}', [App\Http\Controllers\ProjectController::class, 'destroy'])->name('project.destroy');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');