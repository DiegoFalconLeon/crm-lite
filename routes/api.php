<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CustomersUsersController;
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\CustomerController;



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// API USERS
Route::get('/users-list', [UsersController::class, 'list']);
Route::get("/users/find/{id}", [UsersController::class, "findById"]);
Route::post("/users-save", [UsersController::class, "crateUser"]);
Route::put("/users-update/{id}", [UsersController::class, "updateUser"]);
Route::delete("/users-delete/{id}", [UsersController::class, "deleteUser"]);
