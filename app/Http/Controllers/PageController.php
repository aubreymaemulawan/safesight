<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UnrecognizedFaces;
use App\Models\ReportInformation;

class PageController extends Controller
{
    public function report_contents(Request $request, $id) {
        $faces = UnrecognizedFaces::where([['id',$id],['user_id', $request->user()->id]])->first();
        $report = ReportInformation::where('unrecognized_faces_id', $faces->id)->first();
        return view('user.report-contents', compact('faces','report'));
    }

    public function user_profile(){
        return view('user.profile');
    }

    public function police_report_contents(Request $request, $id) {
        $report = ReportInformation::where('id', $id)->first();
        return view('police.report-contents', compact('report'));
    }
}
