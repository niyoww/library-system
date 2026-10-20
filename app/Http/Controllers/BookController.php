<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Buku";
        return view('books.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            // Judul wajib, string, minimal 3 karakter, maksimal 255, dan unik di database
            'title' => 'required|string|min:3|max:255|unique:books,title', 
            
            // Penulis wajib, string, minimal 3 karakter (mencegah input asal seperti titik/satu huruf)
            'author' => 'required|string|min:3|max:255', 
            
            // Tahun wajib, integer, minimal 1900, maksimal tahun saat ini (2026)
            'year' => 'required|integer|min:1900|max:' . date('Y'), 
            
            // Stok wajib, integer, minimal 0, maksimal 10.000
            'stock' => 'required|integer|min:0|max:10000' 
        ]);

        Book::create($validated);
            
        return redirect()
            ->route('books.index')
            ->with('success', 'Data buku berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        $title = "detail buku";
        return view('books.show', compact('title', 'book'));
    }

    public function edit(Book $book)
    {
        $title = "Edit Buku";
        return view('books.edit', compact('title', 'book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        // Validasi juga diterapkan saat update data
        $validated = $request->validate([
            // Mengabaikan pengecualian unique untuk ID buku yang sedang diedit
            'title' => 'required|string|min:3|max:255|unique:books,title,' . $book->id,
            'author' => 'required|string|min:3|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'stock' => 'required|integer|min:0|max:10000'
        ]);

        $book->update($validated);

        return redirect()
            ->route('books.index')
            ->with('success', 'Data buku berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }
}