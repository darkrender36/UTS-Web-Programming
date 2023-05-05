<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemtypeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'start']);
Route::get('/user/{id}/home', [UserController::class, 'home']);

Route::get('/user/{id}/itemtype/{typeid}',[ItemtypeController::class, 'index']);

Route::get('/user/{id}/transaction', [TransactionController::class, 'index']);

Route::get('/user/{id}/item/{itemid}', [ItemController::class, 'create']);
