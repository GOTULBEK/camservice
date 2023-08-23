<?php

use App\Http\Controllers\CameraController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\EventTypeController;
use App\Models\Event_type;
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

Route::get('/check_db_connection', function () {
    return 'Connected to Database';
});
Route::group(['middleware'=> 'auth:sanctum'], function(){
    Route::resources(["Eventtype"=>EventTypeController::class, "Camera"=>CameraController::class, "Events"=>EventsController::class]);
});