<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FamilyCornerController extends Controller
{
    public function index()
    {
        $title_4      = 'FAMILY CORNER';
        $imageLarge_4 = 'storage/family-corner/header.webp';

        $title1_1 = '<h1><span>FAMILY </span>CORNER</h1>';
        $text1_1  = '<div class="padding-top-20"></div>
                    <p>Hi, you have reached the family corner, where parents and children can ask us any type of question regarding their relocation.</p>';
        $image1_1 = 'storage/family-corner/1.webp';

        $imageLarge_10 = 'storage/family-corner/4.webp';

        $colorRed1_10  = 'text-color-red';
        $colorRed2_10  = 'text-color-red';
        $title_10      = 'DO YOU HAVE A QUESTION?';
        $text_10       = 'Have questions about your upcoming move? Let us help! Fill out the form, and one of our relocation experts will get back to you as soon as possible. At Cetra Relocations, we’re here to make your transition seamless—no matter where life is taking you.';

        return view('Public.FamilyCorner.Home')->with([
            'title_4'      => $title_4,
            'imageLarge_4' => $imageLarge_4,

            'title1_1'     => $title1_1,
            'text1_1'      => $text1_1,
            'image1_1'     => $image1_1,

            'imageLarge_10'=> $imageLarge_10,

            'colorRed1_10' => $colorRed1_10,
            'colorRed2_10' => $colorRed2_10,
            'title_10'     => $title_10,
            'text_10'      => $text_10,
        ]);
    }

    public function rs()
    {
        $title_4      = 'RELOCATION SERVICES';
        $imageLarge_4 = 'storage/services/relocation-service/header.webp';

        return view('Public.FamilyCorner.RelocationService.Home')->with([
            'title_4'      => $title_4,
            'imageLarge_4' => $imageLarge_4,
        ]);
    }

    public function as()
    {
        $title_4      = 'ADDITIONAL SERVICES';
        $imageLarge_4 = 'storage/services/additional-services/header.webp';

        return view('Public.FamilyCorner.AdditionalServices.Home')->with([
            'title_4'      => $title_4,
            'imageLarge_4' => $imageLarge_4,
        ]);
    }

    public function mm()
    {
        $title_4      = 'MOVE MANAGEMENT';
        $imageLarge_4 = 'storage/services/move-management/header.webp';

        $text1_1  = '<p><span class="text-color-red">At Cetra Relocations,</span> we provide exceptional moving services and secure warehousing solutions designed to make your relocation experience seamless and stress-free.</p>
                    <div class="padding-top-20"></div>
                    <p>We proudly <span class="text-color-red">assist countless families worldwide</span> with our top-tier door-to-door services, ensuring that every step of the process is handled with care and precision. From expertly packing your household goods and personal effects to arranging safe and reliable pet transportation, we take care of all the details so you don’t have to.</p>
                    <div class="padding-top-20"></div>
                    <p>Additionally, our <span class="text-color-red">warehousing facilities</span> offer a <span class="text-color-red">secure</span> and <span class="text-color-red">convenient option</span> for storing your belongings, whether temporarily or long-term. At <span class="text-color-red">Cetra Relocations,</span> your peace of mind is our priority, and we are committed to delivering a world-class relocation experience.</p>';

        $image1_1  = 'storage/services/move-management/1.webp';

        return view('Public.FamilyCorner.MoveManagement.Home')->with([
            'title_4'     => $title_4,
            'imageLarge_4'=> $imageLarge_4,

            'text1_1'     => $text1_1,
            'image1_1'    => $image1_1,
        ]);
    }

    public function cs()
    {
        $title_4      = 'CORPORATE SERVICES';
        $imageLarge_4 = 'storage/services/corporate-services/header.webp';

        $text1_1  = '<p><span class="text-color-red">Our Corporate Services executive is your single point of contact,</span> providing you with day-to-day program management and advise about best practices, cost reduction opportunities and competitive program enhancements.</p>
                    <div class="padding-top-20"></div>
                    <p>At <span class="text-color-red">Cetra Relocations,</span> we understand that our clients are delegating the authority to perform a part of their job to an outside provider for each relocating employee.</p>
                    <div class="padding-top-20"></div>
                    <p><span class="text-color-red">Cetra Relocations</span> consistently performs as a seamless extension of your business. Our business is service, we are only as good as the report from our most recent transferee, or his or her, spouse or family; for that reason, we emphasize service in every step of our business, an in every function of the process.</p>
                    <div class="padding-top-20"></div>
                    <p>Our Corporate Services Team is ready to assist you on:</p>
                    <div class="padding-top-20"></div>
                    <div class="list-orange-dots">
                        <ul>
                            <li><a href="#"> Relocation Policy Review</a></li>
                            <li><a href="#"> Cost of Living Comparisons</a></li>
                            <li><a href="#"> Legal counseling</a></li>
                            <li><a href="#"> HR Training Seminars</a></li>
                            <li><a href="#"> Project Administration</a></li>
                        </ul>
                    </div>';
        $image1_1  = 'storage/services/corporate-services/1.webp';
        $image2_1  = 'storage/services/corporate-services/2.webp';

        return view('Public.FamilyCorner.CorporateServices.Home')->with([
            'title_4'      => $title_4,
            'imageLarge_4' => $imageLarge_4,

            'text1_1'     => $text1_1,
            'image1_1'    => $image1_1,
            'image2_1'    => $image2_1,
        ]);
    }
}
