<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ReportInformation;
use App\Models\UnrecognizedFaces;
date_default_timezone_set('Asia/Manila');

class DeviceController extends Controller
{
    public function faces(){
        $response = "Successfully saved information.";
        return response()->json($response, 200);
    }
}
