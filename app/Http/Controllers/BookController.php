<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'isbn' => 'required',
            'discreption' => 'required',
            'file' => 'required|mimes:pdf',
            'cover' => 'mimes:png,jpg',
        ]);

        $file = $request->file('file');
        $ecxtntion = $file->getClientOriginalExtension();
        $filename = time() . '.' . $ecxtntion;
        $file->move('books', $filename);

        $book = Book::create([
            'title' => $request->title,
            'isbn' => $request->isbn,
            'discreption' => $request->discreption,
            'file' => $filename,
        ]);

        if ($request->hasfile('cover')) {
            $file = $request->file('cover');
            $ecxtntion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ecxtntion;
            $file->move('cover', $filename);
            $book->update([
                'cover' => $filename,
            ]);
        }

        return redirect()->back()->with('success', 'تم الاضافة بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'isbn' => 'required',
            'discreption' => 'required',
        ]);

        $book->update([
            'title' => $request->title,
            'isbn' => $request->isbn,
            'discreption' => $request->discreption,
        ]);

        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'mimes:pdf',
            ]);
            $file = $request->file('file');
            $ecxtntion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ecxtntion;
            $file->move('books', $filename);
            $book->update([
                'file' => $filename,
            ]);
        }

        if ($request->hasfile('cover')) {
            $request->validate([
                'cover' => 'mimes:png,jpg',
            ]);
            $file = $request->file('cover');
            $ecxtntion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ecxtntion;
            $file->move('cover', $filename);
            $book->update([
                'cover' => $filename,
            ]);
        }

        return redirect()->back()->with('success','تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        if (isset($book->cover)) {
            unlink("cover/$book->cover");
        }

        unlink("cover/$book->file");
        $book->delete();

        return redirect()->back()->with('success', 'تم الحذف بنجاح');
    }
}
