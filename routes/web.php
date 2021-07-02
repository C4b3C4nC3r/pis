<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OtherController;

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

Route::get('/',HomeController::class);
Route::get('/x',[OtherController::class,'index']);
Route::get('/x/c',[OtherController::class,'create']);
Route::get('/x/{params?}',[OtherController::class,'show']);




/*ruteo de mas parametros
Route::get('x/{id}/{class?}', function ($id,$class=null) {
    
});*/