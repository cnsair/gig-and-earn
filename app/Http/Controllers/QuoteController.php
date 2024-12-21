<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuoteRequest;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add-quote');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuoteRequest $request)
    {
        $request->user()->fill($request->validated());

        // Checks status of file selected: Max file size is 10,240mb
        if ( $request ) { 

            $book = new Quote();

            $book->author = $request->input('author');
            $book->description = $request->input('description');

            $book->save();

            return Redirect::route('quote.create')->with('status', 'success');
        }
        else{
            return Redirect::route('quote.create')->with('status', 'failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Quote $book)
    {
        $quotes = Quote::query()->orderBy('id', 'desc')->paginate(10);
        return view('admin.show-quote', compact('quotes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Quote $quote)
    // {
    //     return view('admin.edit-quote', ['quote' => $quote ]);
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(QuoteRequest $request, $quote)
    // {
    //     $request->user()->fill($request->validated());

    //     // Checks status of file selected: Max file size is 10,240mb
    //     if ( $request ) { 

    //         $quote = Quote::find($quote);

    //         $quote->author = $request->input('author');
    //         $quote->description = $request->input('description');
            

    //         $quote->update();

    //         return Redirect()->back()->with('status', 'success');
    //     }
    //     else{
    //         return Redirect()->back()->with('status', 'failed');
    //     }
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($quote)
    {
        $quote = Quote::find($quote);
        $quote->delete();

        return Redirect()->back()->with('status', 'success');
    }
}
