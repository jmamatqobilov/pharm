<?php

use App\Http\Controllers\AptekaController;
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

Route::resource('users', 'UserController');
Route::resource('aptekas', 'AptekaController');
Route::resource('warehouses', 'WarehouseController');
Route::resource('doctor', 'DoctorController');
Route::resource('meetings', 'MeetingController');
Route::resource('producttypes', 'ProductTypeController');
Route::resource('regions', 'RegionController');
Route::resource('products', 'ProductController');
Route::resource('parties', 'PartyController');
Route::resource('permission', 'PermissionController');
Route::resource('roles', 'RoleController');

Route::resources([
    'users' => UserController::class,
    'aptekas' => AptekaController::class,
    'warehouses' => WarehouseController::class,
    'doctors' => DoctorController::class,
    'meetings' => MeetingController::class,
    'producttypes' => ProductTypeController::class,
    'regions' => RegionController::class,
    'products' => ProductController::class,
    'parties' => PartyController::class,
    'permission' => RoleController::class,
    'roles' => RoleController::class,
]);
















































































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

