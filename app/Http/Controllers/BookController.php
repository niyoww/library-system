<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            [
                'id' => 1,
                'category' => 'Dongeng',
                'title' => 'Hansel and Gretel',
                'author' => 'Brothers Grimm',
                'borrower' => 'Intan'
            ],
            [
                'id' => 2,
                'category' => 'Fantasy',
                'title' => "Harry Potter",
                'author' => 'J.K. Rowling',
                'borrower' => 'Nia'
            ],
            [
                'id' => 3,
                'category' => 'Action',
                'title' => 'Jurassic Park',
                'author' => 'Michael Crichton',
                'borrower' => 'Amanda'
            ],
            [
                'id' => 4,
                'category' => 'Manga',
                'title' => 'One Piece',
                'author' => 'Eiichiro Oda',
                'borrower' => 'Syifa'
            ],
            [
                'id' => 5,
                'category' => 'Horror',
                'title' => 'It',
                'author' => 'Stephen King',
                'borrower' => 'Eyyin'
            ]
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}