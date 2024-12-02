<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostjobRequest;
use App\Models\Postjob;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Log;

class PostjobController extends Controller
{
    use AuthorizesRequests;
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Postjob::class);
        
        return view('common.post-job');
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

            $upload->user_id = Auth::user()->id;
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
    
        //if ( Auth::user()->isMember() )
        // Pass the paginated users to the view
        return view('common.show-job', compact('post_jobs'));

        // return view('admin.show')->with('prof_vid_section', $post_job);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Postjob $job)
    {
        $this->authorize('update', $job);

        return view('common.edit-job', ['job' => $job ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( PostjobRequest $request, $job )
    {
        // \Illuminate\Support\Facades\Log::info('User: ' . Auth::user()->id . ', Job owner: ' . $job);
        // tail -f storage/logs/laravel.log

        $job = Postjob::findOrFail($job);
        $this->authorize('update', $job);

        $request->user()->fill($request->validated());

        if ( $request ) {
            // $job = Postjob::find($job);

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
        $job = Postjob::findOrFail($job);
        $this->authorize('delete', $job);
        $job->delete();

        // Delete the profile picture from storage
        Storage::disk('public')->delete($job->file);

        return Redirect::route('job.show')->with('status', 'success');
    }
}
