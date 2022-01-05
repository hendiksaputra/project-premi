<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SpCategoryController;
use App\Http\Controllers\AttendanceCategoryController;

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

Route::get('att_categories', [AttendanceCategoryController::class, 'index']);
Route::get('att_categories/add', [AttendanceCategoryController::class, 'add']);
Route::post('att_categories', [AttendanceCategoryController::class, 'addProcess']);
Route::get('att_categories/edit/{id}', [AttendanceCategoryController::class, 'edit']);
Route::patch('att_categories/{id}', [AttendanceCategoryController::class, 'editProcess']);
Route::delete('att_categories/{id}', [AttendanceCategoryController::class, 'delete']);

Route::get('sp_categories', [SpCategoryController::class, 'index']);
Route::get('sp_categories/add', [SpCategoryController::class, 'add']);
Route::post('sp_categories', [SpCategoryController::class, 'addProcess']);
Route::get('sp_categories/edit/{id}', [SpCategoryController::class, 'edit']);
Route::patch('sp_categories/{id}', [SpCategoryController::class, 'editProcess']);
Route::delete('sp_categories/{id}', [SpCategoryController::class, 'delete']);

