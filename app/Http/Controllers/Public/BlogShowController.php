<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogShowController extends Controller
{
    public function index()
    {
        $title_4      = 'Blog';
        $imageLarge_4 = 'storage/services/header.webp';

        return view('Public.Blog.Home')->with([
            'title_4'       => $title_4,
            'imageLarge_4' => $imageLarge_4,
        ]);
    }
}
