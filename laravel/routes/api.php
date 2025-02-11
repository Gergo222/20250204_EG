<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\OwnerController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/users", [
    Controller::class,
    "getUsers"
]);

Route::post("/users", [
    Controller::class,
    "createUser"
]);

Route::put("/users/{user}", [
     Controller::class,
    "updateUser"
]);

Route::delete("/users/{user}", [
    Controller::class,
    "deleteUser"
]);

Route::group([
    "prefix" => "/cars", 
    "controller" => CarController::class
], function(){
    Route::get("/", "get");

    Route::post("/", "createCar");

    Route::put("/{car}", "updateCar");

    Route::delete("/{car}", "deleteCar");
});

Route::group([
    "prefix" => "/owners",
    "controller" => OwnerController::class
], function() {
    Route::get("/", "getOwners");
    Route::post("/create", "createOwner");
    Route::put("/{owner}", "updateOwner");
    Route::delete("/{owner}", "deleteOwner");
});



