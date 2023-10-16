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
Route::get('/users/list', [UsersController::class, 'list']);
Route::get("/users/find/{id}", [UsersController::class, "findById"]);
Route::post("/users/create", [UsersController::class, "createUser"]);
Route::put("/users/update/{id}", [UsersController::class, "updateUser"]);
Route::delete("/users/delete/{id}", [UsersController::class, "deleteUser"]);

// CUSTOMERS
Route::get('/customers/list', [CustomerController::class, 'list']);
Route::get("/customers/find/{id}", [CustomerController::class, "findById"]);
Route::post("/customers/create", [CustomerController::class, "newCustomer"]);
Route::put("/customers/update/{id}", [CustomerController::class, "updateCustomer"]);
Route::delete("/customers/delete/{id}", [CustomerController::class, "deleteCustomer"]);


// CUSTOMERS USERS
