<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Client\IndexController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',[IndexController::class,'index']);
Route::get('/cluster',[IndexController::class,'cluster']);
Route::get('/details',[IndexController::class,'details']);
Route::get('/filters',[IndexController::class,'filters']);
Route::get('/categories',[IndexController::class,'categories']);