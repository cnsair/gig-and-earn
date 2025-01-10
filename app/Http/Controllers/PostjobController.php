<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostjobRequest;
use App\Models\Category;
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
     * Display a listing of the resource.
     */
    public function index()
    {
        $post_jobs = Postjob::query()->orderBy('id', 'desc')->paginate(10);
        return view('common.index-job', compact('post_jobs'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Postjob::class);
        
        $post_jobs = Postjob::with('category')->get(); // Eager load categories
        $categories = Category::all(); // Fetch all categories for dropdown
    
        return view('common.post-job', compact('post_jobs', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( PostjobRequest $request )
    {
        $request->user()->fill($request->validated());

        // Checks status of file selected: Max file size is 10,240mb
        if ( $request ) {
            $job = new Postjob();
            $job->user_id = Auth::user()->id;
            $job->category_id = $request->input('category_id');
            $job->title = $request->input('title');
            $job->company = $request->input('company');
            $job->web_address = $request->input('web_address');
            $job->location = $request->input('location');
            $job->price_range = $request->input('price_range');
            $job->requirement = $request->input('requirement');
            $job->benefit = $request->input('benefit');
            $job->description = $request->input('description');
            // Handle file upload
            if ($request->hasFile('file')) {
                $job->file = $request->file('file')->store('uploads', 'public');
            } 
            $job->save();

            return Redirect::route('job.create')->with('status', 'success');
        }
        else{
            return Redirect::route('job.create')->with('status', 'failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($job)
    {
        $job = Postjob::findOrFail($job);

        return view('common.show-job', ['job' => $job]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($job)
    {
        $job = Postjob::findOrFail($job);
        $this->authorize('update', $job);
        // dd($jobs);
        $categories = Category::all(); // Fetch all categories for dropdown
        return view('common.edit-job', compact('job', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( PostjobRequest $request, $job )
    {
        $job = Postjob::findOrFail($job);
        $this->authorize('update', $job);

        $request->user()->fill($request->validated());

        if ( $request ) {
            $job->category_id = $request->input('category_id');
            $job->title = $request->input('title');
            $job->company = $request->input('company');
            $job->web_address = $request->input('web_address');
            $job->location = $request->input('location');
            $job->price_range = $request->input('price_range');
            $job->requirement = $request->input('requirement');
            $job->benefit = $request->input('benefit');
            $job->description = $request->input('description');
            
            $selected_file = $request->file('file');

            if (!empty($selected_file)) {
                // Check if a file exists before deleting
                if (!empty($job->file) && Storage::disk('public')->exists($job->file)) {
                    Storage::disk('public')->delete($job->file); // Delete old file
                }
            
                // Upload the new file
                $job->file = $request->file('file')->store('uploads', 'public');
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

        // Check if a file exists before deleting
        if (!empty($job->file) && Storage::disk('public')->exists($job->file)) {
            Storage::disk('public')->delete($job->file); // Delete old file
        }

        return Redirect::route('job.index')->with('status', 'success');
    }
}
