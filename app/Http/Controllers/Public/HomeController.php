<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $imageLarge_10 = 'storage/home/2.webp';

        $subtitle_15   = 'ONLY THE BEST';
        $title1_15     = 'OUR ';
        $title2_15     = 'PARTNERS';
        $image_15      = 'storage/home/12.webp';

        $colorRed1_10  = 'text-color-red';
        $title_10      = 'REQUEST A CALL BACK';
        $subtitle_10   = 'Your Journey, Our Priority: Get Expert Assistance for Your Next Move';
        $text_10       = 'Have questions about your upcoming move? Let us help! Fill out the form, and one of our relocation experts will get back to you as soon as possible. At Cetra Relocations, we’re here to make your transition seamless—no matter where life is taking you.';

        return view('Public.Home.Home')->with([
            'imageLarge_10'=> $imageLarge_10,

            'subtitle_15'  => $subtitle_15,
            'title1_15'    => $title1_15,
            'title2_15'    => $title2_15,
            'image_15'     => $image_15,

            'colorRed1_10' => $colorRed1_10,
            'title_10'     => $title_10,
            'subtitle_10'  => $subtitle_10,
            'text_10'      => $text_10,
        ]);
    }
}
