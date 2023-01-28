<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ReportInformation;
use App\Models\UnrecognizedFaces;
date_default_timezone_set('Asia/Manila');

class UserController extends Controller
{
    protected $auth;

    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(Request $request) {
        $report = ReportInformation::all();
        $faces = UnrecognizedFaces::where('user_id', $request->user()->id)->orderBy('created_at','desc')->get();
        return view('user.dashboard',compact('report','faces'));
    }

    public function tbl_user_dashboard(Request $request) {
        $report = ReportInformation::all();
        $faces = UnrecognizedFaces::where('user_id', $request->user()->id)->orderBy('created_at','desc')->get();
        return view('user.table.tbl-user-dashboard',compact('report','faces'));
    }
}