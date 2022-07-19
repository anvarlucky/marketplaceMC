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
Route::get('/',[IndexController::class,'index2']);
Route::get('/house',[IndexController::class,'house'])->name('house');
Route::get('/detsad',[IndexController::class,'detsad']);
Route::get('pdfclient',[IndexController::class,'pdf'])->name('pdfclient');
Route::get('/tex',[IndexController::class,'index'])->name('text');
Route::get('/cluster',[IndexController::class,'cluster'])->name('cluster');
Route::get('/details',[IndexController::class,'details']);
Route::get('/car1_details',[IndexController::class,'car1_details']);
Route::get('/car2_details',[IndexController::class,'car2_details']);
Route::get('/car3_details',[IndexController::class,'car3_details']);
Route::get('/car4_details',[IndexController::class,'car4_details']);
Route::get('/filters',[IndexController::class,'filters']);
Route::get('/categories',[IndexController::class,'categories']);
Route::get('/materials',[IndexController::class,'materials'])->name('materials');
Route::get('/detmaterials',[IndexController::class,'detmaterials']);
Route::get('/detailtaxta',[IndexController::class,'detailtaxta']);
Route::get('/detailgisht',[IndexController::class,'detailgisht']);
Route::get('/detailarmatura',[IndexController::class,'detailarmatura']);
Route::get('/detailplita',[IndexController::class,'detailplita']);
Route::get('/detkley',[IndexController::class,'detkley']);
