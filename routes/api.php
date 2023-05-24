<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\AccountController;
use App\Models\BuyerController;
use App\Models\MerchantController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('/account', AccountController::class);
Route::resource('/buyer', AccountController::class);
Route::resource('/merchant', AccountController::class);