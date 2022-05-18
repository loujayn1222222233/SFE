<?php
use App\Http\Controllers\Conge;
use App\Http\Controllers\Employe;
use App\Http\Controllers\Calender;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\CongeController;
use App\Http\Controllers\CalenderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
/* Route::get('/employes',function(){
   return 'employes';
}); */
Route::get('employes',[EmployeController::class , 'index']);
Route::put('employes/{id}',[EmployeController::class,'update']);
Route::delete('employes/{id}',[EmployeController::class,'destroy']);
Route::post('/register',[AuthController::class,'logout']);
Route::post('/employes',[EmployeController::class,'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('conges',CongeController::class);
Route::put('conges/{id}',[CongeController::class,'update']);
Route::delete('conges/{id}',[CongeController::class,'destroy']);
Route::post('/conges',[CongeController::class,'store']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('calenders',[CalenderController::class , 'index']);
Route::delete('calenders/{id}',[CalenderController::class,'destroy']);
Route::post('/calenders',[CalenderController::class,'store']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
