<?php

namespace App\Http\Controllers\Front;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function show(Request $request)
    {
        return view('front.show');
    }

    public function details()
    {
        return view('front.detail');
    }
}
