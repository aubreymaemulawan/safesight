<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ReportInformation;
use App\Models\UnrecognizedFaces;
date_default_timezone_set('Asia/Manila');

class DeviceController extends Controller
{
    public function faces(Request $request){
        // Validation Rules
        $request->validate([
            'user_id' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);

        if($request->image && $request->user_id){
            // Save to Database
            $data = new UnrecognizedFaces();
            $data->user_id = $request->user_id;
            if($request->hasFile('image')){
                $image_name = $request->file('image')->getClientOriginalName();
                $image_path = $request->file('image')->store('public/Images');
                $data->image_name = $image_name;
                $data->image_path = $image_path;
            }
            $data->save();
            $response = ['message' => 'Successfully saved information with ID '.$data->id];
            return response()->json($response, 200);
        }else{
            $response = ['message' => 'Could not save data to database.'];
            return response()->json($response, 400);
        }
           
    }
}
