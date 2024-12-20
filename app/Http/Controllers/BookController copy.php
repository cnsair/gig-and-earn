<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
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
        return view('admin.add-book');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
        $request->user()->fill($request->validated());

        // Checks status of file selected: Max file size is 10,240mb
        if ( $request ) { 

            $book = new Book();

            $book->title = $request->input('title');
            $book->author = $request->input('author');
            $book->isbn = $request->input('isbn');
            $book->description = $request->input('description');
            $book->book_file = $request->file('book_file')->store('books/file', 'public');
            $book->cover_art = $request->file('cover_art')->store('books/cover-art', 'public');

            $book->save();

            return Redirect::route('book.create')->with('status', 'success');
        }
        else{
            return Redirect::route('book.create')->with('status', 'failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        $books = Book::query()->orderBy('id', 'desc')->paginate(10);
        return view('admin.show-book', compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('admin.edit-book', ['book' => $book ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookRequest $request, $book)
    {
        $request->user()->fill($request->validated());

        // Checks status of file selected: Max file size is 10,240mb
        if ( $request ) { 

            $book = Book::find($book);

            $book->title = $request->input('title');
            $book->author = $request->input('author');
            $book->isbn = $request->input('isbn');
            $book->description = $request->input('description');
            // $book->book_file = $request->file('book_file')->store('books/file', 'public');
            // $book->cover_art = $request->file('cover_art')->store('books/cover-art', 'public');
            
            $book_file = $request->file('book_file');
            if ( !empty($book_file) ) {
                Storage::disk('public')->delete($book->book_file); //delete old file
                $book->book_file = $request->file('book_file')->store('books/file', 'public'); //upload new file
            }
            
            $cover_art = $request->file('cover_art');
            if ( !empty($cover_art) ) {
                Storage::disk('public')->delete($book->cover_art); //delete old file
                $book->cover_art = $request->file('cover_art')->store('books/cover-art', 'public'); //upload new file
            }

            $book->update();

            return Redirect()->back()->with('status', 'success');
        }
        else{
            return Redirect()->back()->with('status', 'failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($book)
    {
        $book = Book::find($book);
        $book->delete();

        // Delete the files from storage
        Storage::disk('public')->delete($book->book_file);
        Storage::disk('public')->delete($book->cover_art);

        // return Redirect::route('book.show')->with('status', 'success');
        return Redirect()->back()->with('status', 'success');
    }
}
