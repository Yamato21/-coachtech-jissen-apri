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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [todoController::class, 'index']);
Route::post('/create{task_name,tag_id}', [todoController::class, 'create']);
Route::post('/update{id}', [todoController::class, 'update']);
Route::post('/delete{id}', [todoController::class, 'delete']);
Route::post('/find{task_name、tag_id}', [todoController::class, 'find']);
Route::get('/find', [todoController::class, 'search']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
