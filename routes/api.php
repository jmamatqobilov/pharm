<?php

use App\Http\Controllers\AptekaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WarehouseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/', function (Request $request) {
    return [];
});



Route::resources([
    'users' => UserController::class,
    'clients' => ClientController::class,
    'warehouses' => WarehouseController::class,
    'doctors' => DoctorController::class,
    'meetings' => MeetingController::class,
    'producttypes' => ProductTypeController::class,
    'regions' => RegionController::class,
    'products' => ProductController::class,
    'parties' => PartyController::class,
    'roles' => RoleController::class,
]);

Route::post('login', [AuthController::class, 'login']);
Route::get('role', [AuthController::class, 'roles']);

Route::get('permission',[RoleController::class,'getpermissions']);

















































































Route::group(['middleware' => ['role:super-admin','permission:publish articles']], function () {
    //
});

Route::get('/', function(){
    //
  })->middleware(['can:edit articles']);

  Route::group(['middleware' => ['role:super-admin|writer']], function () {
    //
});





// Route::get('index',function(){
//     return ['message'=>'ok'];
// })->middleware('test_middleware:test uchun middleware');

