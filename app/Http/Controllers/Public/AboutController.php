<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $title_4      = 'ABOUT US';
        $imageLarge_4 = 'storage/about/header.webp';

        return view('Public.About.Home')->with([
            'title_4'      => $title_4,
            'imageLarge_4' => $imageLarge_4,
        ]);
    }
}
