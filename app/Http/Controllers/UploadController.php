<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\RedirectResponse;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('admin.upload');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.upload');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Upload $request, array $input): void
    public function store( UploadRequest $request ): RedirectResponse
    {
        // Validator::make($input, [
        //     'title' => ['required', 'string', 'max:50'],
        //     'description' => ['required', 'string', 'max:500'],
        //     'file' => ['mimes:jpg,jpeg,png,PNG', 'max:5072'],
        // ])->validate();

        // if (isset($input['photo'])) {
        //    $request->file('file')->store('uploads', 'public');
        // }

        // $request->forceFill([
        //     'title' => $input['title'],
        //     'description' => $input['description'],
        //     'file' => $input['file'],
        // ])->save();

        // session()->flash('status', 'File successfully uploaded.');

        $request->user()->fill($request->validated());

        // Checks status of file selected: Max file size is 10,240mb
        if ( $request == true) { 

            $upload = new Upload();

            $upload->title = $request->input('title');
            $upload->type = $request->input('type');
            $upload->description = $request->input('description');
            $upload->file = $request->file('file')->store('uploads', 'public');

            $upload->save();

            return Redirect::route('upload.create')->with('status', 'success');
        }
        else{
            return Redirect::route('upload.create')->with('status', 'failed');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Upload $upload)
    {
        return view('upload.edit', ['upload' => $upload ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
