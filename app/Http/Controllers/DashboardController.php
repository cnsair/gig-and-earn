<?php

namespace App\Http\Controllers;

use App\Models\Upload;

class DashboardController extends Controller
{
    //Controller that renders posted items
    public function showInDashboard(){
        
        $prof_vid_section = Upload::where('type', 1)
                                    ->orderBy('id', 'desc')
                                    ->limit(1)->get();
        $course_vid_section = Upload::where('type', 2)
                                    ->orderBy('id', 'desc')
                                    ->limit(1)->get();        

        return view('admin.dashboard')
            ->with('prof_vid_section', $prof_vid_section)
            ->with('course_vid_section', $course_vid_section);

    }
}
