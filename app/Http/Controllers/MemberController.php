<?php

namespace App\Http\Controllers;

class MemberController extends Controller
{
    public function index()
    {
        $members = [
            'Intan',
            'Nia',
            'Amanda',
            'Syifa',
            'Eyyin'
        ];

        return view('members.index', compact('members'));
    }
}