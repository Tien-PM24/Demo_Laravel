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


Route::get('/hi',[App\Http\Controllers\HelloController::class,'hello']);
Route::get('/sum', [App\Http\Controllers\SumController::class, 'index']);
Route::post('/sum', [App\Http\Controllers\SumController::class, 'calculate']);


Route::get('/covid-data', [App\Http\Controllers\CovidController::class, 'index'])->name('covid.data');



use App\Http\Controllers\SignController;

Route::get('/signup', [SignController::class, 'index']);
Route::post('/signup', [SignController::class, 'displayInfor']);


Route::get('/valida', [App\Http\Controllers\ValidationController::class, "showForm"]);
Route::post('/valida', [App\Http\Controllers\ValidationController::class, "validation"]);
Route::get('/addproduct', [App\Http\Controllers\ListProductsController::class,"showAddForm"])->name('addproduct');
Route::post('/addproduct', [App\Http\Controllers\ListProductsController::class,"creatSession"]);
Route::get('/showproducts', [App\Http\Controllers\ListProductsController::class,"showProduct"])->name('showproducts');

//Tạo bảng trong 

Route::get('/database', function() {
    Schema::create('loaisanpham',function($table){
        $table->increment('id');
        $table->string('ten',200);
    });
    echo "Đã tạo bảng thành công";
});


Route::get('/', [App\Http\Controllers\PageController::class, "getIndex"]);
Route::get('/homePage', [App\Http\Controllers\PageController::class, "getIndex"]);

Route::get('/typeProduct/{id}', [App\Http\Controllers\PageController::class, 'getLoaiSp']);

Route::get('/detailProduct/{id}', [App\Http\Controllers\PageController::class, 'getDetail']);


Route::get('/admin',[App\Http\Controllers\PageController::class,'getIndexAdmin']);
Route::get('/adminAdd', [App\Http\Controllers\PageController::class, 'getAdminAdd'])->name('admin.add-add');														
Route::post('/adminAdd', [App\Http\Controllers\PageController::class, 'postAdminAdd'])->name('admin.admin-add');										
Route::get('/adminEdit/{id}', [App\Http\Controllers\PageController::class, 'getAdminEdit']);												
Route::post('/adminEdit/{id}', [App\Http\Controllers\PageController::class, 'postAdminEdit']);													
Route::post('/adminDelete/{id}', [App\Http\Controllers\PageController::class, 'postAdminDelete']);															






