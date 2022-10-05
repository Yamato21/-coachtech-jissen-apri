<?php

use Illuminate\Support\Facades\Route;
use App\todo;
use App\http\Controllers\todoController;
use Illuminate\Http\Request;





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
Route::get('/', [todoController::class, 'index']);
Route::get('/create{task_name}', [todoController::class, 'add']);
Route::post('/create{task_name}', [todoController::class, 'create']);
Route::get('/update{id,task_name}', [todoController::class, 'edit']);
Route::post('/update{id,task_name}', [todoController::class, 'update']);
Route::get('/delete{id}', [todoController::class, 'delete']);
Route::post('/delete{id}', [todoController::class, 'remove']);