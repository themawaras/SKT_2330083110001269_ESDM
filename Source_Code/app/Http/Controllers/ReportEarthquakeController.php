<?php

namespace App\Http\Controllers;

use App\Models\earthquake_report;
use App\Models\Post;
use Illuminate\Http\Request;

class ReportEarthquakeController extends Controller
{
    public function createEarthquakeReport(Request $request) {
        $incomingFields = $request->validate([
            'lokasi' => 'required',
            'deskripsi' => 'required',
            'kedalaman' => 'required',
            'magnitude' => 'required',
            'waktu_kejadian' => 'required',
        ]);

        $incomingFields['lokasi'] = strip_tags($incomingFields['lokasi']);
        $incomingFields['deskripsi'] = strip_tags($incomingFields['deskripsi']);
        $incomingFields['kedalaman'] = strip_tags($incomingFields['kedalaman']);
        $incomingFields['magnitude'] = strip_tags($incomingFields['magnitude']);
        $incomingFields['waktu_kejadian'] = strip_tags($incomingFields['waktu_kejadian']);
        earthquake_report::create($incomingFields);
        return redirect('/');
    }
}
