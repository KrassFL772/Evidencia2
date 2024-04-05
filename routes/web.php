<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareasCtrl;

Route::get('/', function () {
    return view('tareas');
});

Route::get('/tareas', function () {
    return view('todos.index');
});

Route::post('/tareas',[TareasCtrl::class, 'store'])->name('todos');

Route::get('/tareas',[TareasCtrl::class, 'index'])->name('todos');

Route::patch('/tareas',[TareasCtrl::class, 'store'])->name('todos-edit');

Route::delete('/tareas',[TareasCtrl::class, 'store'])->name('todos-destroy');