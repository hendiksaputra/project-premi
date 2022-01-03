<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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
    return view('welcome', ['title' => 'Premi Operator Arka']);
});

Route::get('home', function () {
    return view('home');
});

Route::get('projects', [ProjectController::class, 'index']);
Route::get('projects/add', [ProjectController::class, 'add']);
Route::post('projects', [ProjectController::class, 'addProcess']);
Route::get('projects/edit/{id}', [ProjectController::class, 'edit']);
Route::patch('projects/{id}', [ProjectController::class, 'editProcess']);
Route::delete('projects/{id}', [ProjectController::class, 'delete']);





