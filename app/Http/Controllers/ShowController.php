<?php

namespace App\Http\Controllers;

use App\Models\Upload;

class ShowController extends Controller
{
    //Controller that renders posted items
    public function showInAdmin(){
        
        $prof_vid_section = Upload::query()->orderBy('id', 'asc')->get();
        // $testimony_section = Testimony::where('approved', true)->limit(1)->get();
        // $education_section = Education::query()->orderBy('id', 'desc')->get();
        // $experience_section = Experience::query()->orderBy('id', 'desc')->get();
        // $portfolio_section = Portfolio::query()->orderBy('id', 'desc')->get();
        // $resume_section = Resume::query()->orderBy('id', 'desc')->get();

        return view('admin.dashboard')
            // ->with('summary_section', $summary_section)
            // ->with('education_section', $education_section)
            // ->with('experience_section', $experience_section)
            // ->with('portfolio_section', $portfolio_section)
            ->with('prof_vid_section', $prof_vid_section);

        // $dash["summary_section"] = $summary_section;
        // $dash["education_section"] = $education_section;
        // $dash["experience_section"] = $experience_section;

        // return view('uploads/show', $dash)

    }
}
