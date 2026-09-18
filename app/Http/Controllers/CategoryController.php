<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = [
            'Dongeng',
            'Fantasy',
            'Action',
            'Manga',
            'Horror'
        ];

        return view('categories.index', compact('categories'));
    }
}