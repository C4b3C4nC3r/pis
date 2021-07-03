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

//Route::get('/',HomeController::class);
Route::get('/x',[OtherController::class,'index'])->name('x.index');
Route::get('/x/c',[OtherController::class,'create'])->name('x.create');
Route::post('/x',[OtherController::class,'store'])->name('x.store');//recibir info del formulario
Route::get('/s/{x}',[OtherController::class,'show'])->name('x.show');
Route::get('/u/{x}/update',[OtherController::class,'update'])->name('x.update');
Route::put('/e/{x}',[OtherController::class,'editado'])->name('x.editado');//llravel recomiendo el put paar actualizar





/*ruteo de mas parametros
Route::get('x/{id}/{class?}', function ($id,$class=null) {
    
});*/