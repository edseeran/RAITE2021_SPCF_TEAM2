<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Ship;
use App\Models\Crew;
use App\Http\Controllers\CrewController;
use App\Http\Controllers\ShipController;
use App\Http\Controllers\DashboardController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return view('login');
});


Route::apiResource('/dashboard','App\Http\Controllers\DashboardController');

Route::apiResource('/ships','App\Http\Controllers\ShipController');
Route::apiResource('/crews','App\Http\Controllers\CrewController');
