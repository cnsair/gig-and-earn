<?php

namespace App\Http\Controllers;

use App\Models\Postjob;

class HomeRendererController extends Controller
{
    //Controller that renders posted items
    public function HomeRenderer(){
        
        $find_job = Postjob::query()->orderBy('id', 'desc')
                                    ->limit(5)->get();      

        return view('home.home')
            ->with('find_jobs', $find_job);
    }
}
