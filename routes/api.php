<?php

use App\Http\Controllers\APICategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\APIProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::apiResource('products', APIProductController::class);
Route::put('/products/{id}/disable', [APIProductController::class, 'editImage']);
Route::post('/products/create', [APIProductController::class, 'store']);

Route::apiResource('categories', APICategoryController::class);
Route::post('/categories/create', [APICategoryController::class, 'store']);

Route::apiResource('subcategories', APISubCategoryController::class);
Route::post('/subcategories/create', [APISubCategoryController::class, 'store']);