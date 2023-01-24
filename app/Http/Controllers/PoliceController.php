<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ReportInformation;
use App\Models\UnrecognizedFaces;
date_default_timezone_set('Asia/Manila');

class PoliceController extends Controller
{
    protected $auth;

    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(Request $request) {
        $report = ReportInformation::where('is_validated',1)->get();
        $cnt_report = count($report);
        $month = ReportInformation::where('is_validated',1)->whereYear('created_at', '=', date('Y'))->whereMonth('created_at', '=', date('m'))->get();
        $cnt_month = count($month);
        return view('police.dashboard',compact('report','cnt_report','cnt_month'));
    }
}