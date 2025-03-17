<div class="padding-top-100"></div>

<section class="news-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 title-column">
                <div class="section-title sec-title wow slideInLeft title-column" data-wow-delay="00ms"
                    data-wow-duration="1500ms">
                    {!! htmlspecialchars_decode($title1_1 ?? '') !!}
                </div>
                <div class="text">
                    {!! htmlspecialchars_decode($text1_1 ?? '') !!}
                    <div class="padding-top-20"></div>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col-lg-4 col-md-12 col-sm-12 image-column">
                <figure class="image-box wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms"><img
                        src="{{ asset($image1_1 ?? '') }}" alt=""></figure>
                <div class="padding-top-20"></div>
                <figure class="image-box wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms"><img
                        src="{{ asset($image2_1 ?? '') }}" alt=""></figure>
            </div>
        </div>
    </div>
</section>
