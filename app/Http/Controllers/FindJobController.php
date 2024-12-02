<?php

namespace App\Http\Controllers;

use App\Models\Postjob;

class FindJobController extends Controller
{
    //Controller that renders posted items
    public function HomeRenderer(){
        
        $find_job_paginate = Postjob::query()->orderBy('id', 'desc')->paginate(10);    

        return view('home.find-job')
            ->with('find_jobs', $find_job_paginate);
    }
}
