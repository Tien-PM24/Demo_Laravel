<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\SignController;
use App\Http\Controllers\PageController;
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


Route::get('/hi',[HelloController::class,'hello']);
Route::get('/sum', [SumController::class, 'index']);
Route::post('/sum', [SumController::class, 'calculate']);


Route::get('/covid-data', [CovidController::class, 'index'])->name('covid.data');

Route::get('/signup', [SignController::class, 'index']);
Route::post('/signup', [SignController::class, 'displayInfor']);


Route::get('/valida', [ValidationController::class, "showForm"]);
Route::post('/valida', [ValidationController::class, "validation"]);
Route::get('/addproduct', [ListProductsController::class,"showAddForm"])->name('addproduct');
Route::post('/addproduct', [ListProductsController::class,"creatSession"]);
Route::get('/showproducts', [ListProductsController::class,"showProduct"])->name('showproducts');

//Tạo bảng trong 

Route::get('/database', function() {
    Schema::create('loaisanpham',function($table){
        $table->increment('id');
        $table->string('ten',200);
    });
    echo "Đã tạo bảng thành công";
});


Route::get('/', [PageController::class, "getIndex"]);
Route::get('/homePage', [PageController::class, "getIndex"]);

Route::get('/typeProduct/{id}', [PageController::class, 'getLoaiSp']);

Route::get('/detailProduct/{id}', [PageController::class, 'getDetail'])->name('detailProduct');

Route::get('/admin',[PageController::class,'getIndexAdmin']);
Route::get('/adminAdd', [PageController::class, 'getAdminAdd']);											
Route::post('/adminAdd', [PageController::class, 'postAdminAdd']);									
Route::get('/adminEdit/{id}', [PageController::class, 'getAdminEdit']);												
Route::post('/adminEdit/{id}', [PageController::class, 'postAdminEdit']);													
Route::post('/adminDelete/{id}', [PageController::class, 'postAdminDelete']);															






