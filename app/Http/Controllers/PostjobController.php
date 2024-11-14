<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostjobRequest;
use App\Models\Postjob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

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
        $post_jobs = Postjob::query()->orderBy('id', 'desc')->paginate(2);
        // $post_jobs = Postjob::paginate(10);
    
        // Pass the paginated users to the view
        return view('admin.show-job', compact('post_jobs'));

        // return view('admin.show')->with('prof_vid_section', $post_job);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Postjob $job)
    {
        return view('admin.edit-job', ['job' => $job ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( PostjobRequest $request, $job )
    {
        $request->user()->fill($request->validated());

        if ( $request ) {

            $job = Postjob::find($job);

            $job->category = $request->input('category');
            $job->title = $request->input('title');
            $job->company = $request->input('company');
            $job->web_address = $request->input('web_address');
            $job->location = $request->input('location');
            $job->price_range = $request->input('price_range');
            $job->description = $request->input('description');
            
            $selected_file = $request->file('file');
            if ( !empty($selected_file) ) {
                Storage::disk('public')->delete($job->file); //delete old file
                $job->file = $request->file('file')->store('uploads', 'public'); //upload new file
            }

            $job->update();

            return Redirect::route('job.edit', ['job' => $job])->with('status', 'success');
        }
        else{
            return Redirect::route('job.edit', ['job' => $job])->with('status', 'failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $job )
    {
        $job = Postjob::find($job);
        $job->delete();

        // Delete the profile picture from storage
        Storage::disk('public')->delete($job->file);

        return Redirect::route('job.show')->with('status', 'success');
    }
}
