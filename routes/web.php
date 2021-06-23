<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareasController;
use App\Http\Controllers\HomeController;


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

Route::get('/', HomeController::class)->name('home');
  


Route::get('tareas',[TareasController::class,'index'])->name('tareas.index');

Route::get('tareas/create',[TareasController::class,'create'])->name('tareas.create');

Route::post('tareas/', [TareasController::class,'store'])->name('tareas.store');

Route::get('tareas/{tareas}', [TareasController::class,'show'])->name('tareas.show');

Route::resource('tareas', TareasController::class);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
