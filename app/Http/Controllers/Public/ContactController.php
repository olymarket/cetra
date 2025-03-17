<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $title_4      = 'CONTACT US';
        $imageLarge_4 = 'storage/contact/header.webp';

        $colorRed1_10  = 'text-color-red';
        $title_10      = 'REQUEST A CALL BACK';
        $subtitle_10   = 'Your Journey, Our Priority: Get Expert Assistance for Your Next Move';
        $text_10       = 'Have questions about your upcoming move? Let us help! Fill out the form, and one of our relocation experts will get back to you as soon as possible. At Cetra Relocations, we’re here to make your transition seamless—no matter where life is taking you.';

        return view('Public.Contact.Home')->with([
            'title_4'      => $title_4,
            'imageLarge_4' => $imageLarge_4,

            'colorRed1_10' => $colorRed1_10,
            'title_10'     => $title_10,
            'subtitle_10'  => $subtitle_10,
            'text_10'      => $text_10,
        ]);
    }
}
