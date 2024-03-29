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

Route::get('/', function () {
    return view('Task_Desc');
})->name('home');

Route::get('/home', function () {
    return view('Task_Desc');
})->name('home');

Route::get('/task1', function () {
    return view('mainTask1');
})->name('task1');

Route::get('/task2', function () {
    return view('mainTask2');
})->name('task2');

Route::get('/task3', function () {
    return view('mainTask3');
})->name('task3');

Route::get('/task4', function () {
    return view('mainTask4');
})->name('task4');

Route::get('/task', [\App\Http\Controllers\TaskController::class, 'task'])->name('task');
