<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $title_4      = 'SERVICES';
        $imageLarge_4 = 'storage/services/header.webp';

        $subtitle_15  = 'ONLY THE BEST';
        $title1_15    = 'OUR ';
        $title2_15    = 'PARTNERS';
        $image_15     = 'storage/home/12.webp';

        $text1_1  = '<p><span class="text-color-red">Cetra Relocations</span> is proud to be the first and only Relocation Company in Mexico to offer Domestic Relocations around the Country and <span class="text-color-red">International Relocations around the World.</span> At Cetra Relocations we believe that in order to assist our clients, we cannot offer standard packages.</p>
                    <div class="padding-top-20"></div>
                    <p>very person has different needs, and that is the main reason we treat and each assignment as an individual Relocation.</p>
                    <div class="padding-top-20"></div>
                    <p>All our services were <span class="text-color-red">carefully designed</span> to cover most expatriate needs, without leaving behind that every family has different wants and needs.</p>
                    <div class="padding-top-20"></div>
                    <p>To cover every requirement we are more than happy to accommodate special needs to <span class="text-color-red">tailor our services</span> to each individual.</p>';

        $image1_1 = 'storage/services/1.webp';

        return view('Public.Services.Home')->with([
            'title_4'     => $title_4,
            'imageLarge_4'=> $imageLarge_4,

            'subtitle_15' => $subtitle_15,
            'title1_15'   => $title1_15,
            'title2_15'   => $title2_15,
            'image_15'    => $image_15,

            'text1_1'     => $text1_1,
            'image1_1'    => $image1_1,
        ]);
    }
}
