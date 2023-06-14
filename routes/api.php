<?php													
													
use Illuminate\Http\Request;													
use Illuminate\Support\Facades\Route;													
use App\Http\Controllers\APIController;
use App\Http\Controllers\API_LazadaController;									
/*													
|--------------------------------------------------------------------------													
| API Routes													
|--------------------------------------------------------------------------													
|													
| Here is where you can register API routes for your application. These													
| routes are loaded by the RouteServiceProvider within a group which													
| is assigned the "api" middleware group. Enjoy building your API!													
|													
*/													
													
Route::middleware('auth:api')->get('/user', function (Request $request) {													
return $request->user();													
});													
													
// create api													
Route::get('/data',[APIController::class,'getProducts']);													
																									
													
Route::get('/get-product/{id}', [APIController::class,'getOneProduct']);													
Route::post('/add-product',[APIController::class,'addProduct']);													
Route::delete('/delete-product/{id}',[APIController::class,'deleteProduct']);													
Route::put('/edit-product/{id}',[APIController::class,'editProduct']);													
													
Route::post('/upload-image',[APIController::class,'uploadImage']);			


//--------Lazada----------------

Route::get('/lazada',[API_LazadaController::class,'getItems']);

Route::get('/oneItem', [API_LazadaController::class,'getOneItem']);
Route::post('/add-item', [API_LazadaController::class,'createItem']);
Route::put('/edit-item/{id}', [API_LazadaController::class,'updateItem']);
Route::delete('/delete-item/{id}', [API_LazadaController::class,'deleteItem']);

