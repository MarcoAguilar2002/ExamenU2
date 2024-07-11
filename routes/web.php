<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController; 

Route::view('/','home')->name('home');

Route::get('listado',[AlumnosController::class,'index'])->name('alumnos.index');
Route::get('ingreso',[AlumnosController::class,'create'])->name('ingreso');
Route::post('ingreso',[AlumnosController::class,'store'])->name('alumnos.store');
Route::get('listado/{id}',[AlumnosController::class,'show'])->name('alumnos.show');

