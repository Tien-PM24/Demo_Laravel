<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


//Route::get('/', function () {
//    return view('Calculation');
//});

//Route::post('/Laravel_PHP/welcome', [CalculationController::class, 'Calculation'])->name('Calculation');

//Route::get('/welcome', function() {
//});

Route::get('/hi',[App\Http\Controllers\HelloController::class,'hello']);

//Route::get('/hello', [HelloController::class, 'hello']);

Route::get('/sum', [App\Http\Controllers\SumController::class, 'index'])->name('sum');
Route::post('/sum', [App\Http\Controllers\SumController::class, 'calculate'])->name('calculate');


Route:: get('/', 'AreaofshapeController@computerArea');
Route:: post('/', 'AreaofshapeController@computerArea');