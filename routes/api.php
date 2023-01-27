<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportInformationController;
use App\Http\Controllers\DeviceIController;
date_default_timezone_set('Asia/Manila');

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

Route::post('/auth/faces', [DeviceController::class,'faces']);


//Report Information
Route::match(['get','post',], 'report_information/list', [ReportInformationController::class,'list']);
Route::match(['get','post',], 'report_information/items', [ReportInformationController::class,'items']);
Route::match(['get','post',], 'report_information/create', [ReportInformationController::class,'create']);
Route::match(['get','post',], 'report_information/update', [ReportInformationController::class,'update']);
Route::match(['get','post',], 'report_information/delete', [ReportInformationController::class,'delete']);
