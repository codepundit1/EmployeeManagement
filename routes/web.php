<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [EmployeeController::class, 'home']);
Route::get('/list', [EmployeeController::class, 'list']);
Route::view('/add', 'add');
Route::post('/add', [EmployeeController::class, 'addEmp']);
Route::get('/delete/{id}', [EmployeeController::class, 'delete']);
Route::get('/edit/{id}', [EmployeeController::class, 'show']);
Route::put('/update/{id}', [EmployeeController::class, 'update']);
