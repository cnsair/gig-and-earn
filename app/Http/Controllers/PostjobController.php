<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostjobRequest;
use App\Models\Postjob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PostjobController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.post-job');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( PostjobRequest $request )
    {
        $request->user()->fill($request->validated());

        // Checks status of file selected: Max file size is 10,240mb
        if ( $request ) { 

            $upload = new Postjob();

            $upload->category = $request->input('category');
            $upload->title = $request->input('title');
            $upload->company = $request->input('company');
            $upload->web_address = $request->input('web_address');
            $upload->location = $request->input('location');
            $upload->price_range = $request->input('price_range');
            $upload->description = $request->input('description');
            $upload->file = $request->file('file')->store('uploads', 'public');

            $upload->save();

            return Redirect::route('job.create')->with('status', 'success');
        }
        else{
            return Redirect::route('job.create')->with('status', 'failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $post_jobs = Postjob::query()->orderBy('id', 'desc')->paginate(10);
        // $post_jobs = Postjob::paginate(10);
    
        // Pass the paginated users to the view
        return view('admin.show-job', compact('post_jobs'));

        // return view('admin.show')->with('prof_vid_section', $post_job);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Postjob $postjob)
    {
        return view('admin.edit-job', ['job' => $postjob ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Postjob $postjob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Postjob $postjob)
    {
        //
    }
}
