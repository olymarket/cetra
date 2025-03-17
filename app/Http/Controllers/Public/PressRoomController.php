<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PressRoomController extends Controller
{
    public function index()
    {
        $title_4      = 'PRESS ROOM';
        $imageLarge_4 = 'storage/press-room/header.webp';

        $imageLarge_10 = 'storage/press-room/2.webp';

        $title1_1 = '<h1><span>PRESS </span>ROOM</h1>';
        $text1_1  = '<div class="padding-top-20"></div>
                    <p><span class="text-color-red">Cetra Relocations</span> has recently changed image. Learn all about us from our press kit, including success stories, anecdotes and pictures, to offer a wide range of services under one roof.</p>';
        $image1_1 = 'storage/press-room/1.webp';

        return view('Public.PressRoom.Home')->with([

            'title_4'      => $title_4,
            'imageLarge_4' => $imageLarge_4,

            'imageLarge_10'=> $imageLarge_10,

            'title1_1'      => $title1_1,
            'text1_1'       => $text1_1,
            'image1_1'      => $image1_1,
        ]);
    }
}
