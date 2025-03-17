<div class="padding-top-100"></div>

<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <h2 class="{{ $colorRed2_10 ?? '' }}">{{ $title_10 ?? '' }}</h2>
                    <div class="{{ $colorRed1_10 ?? '' }}">{{ $subtitle_10 ?? '' }}</div>
                    <div>{{ $text_10 ?? '' }}</div>
                </div>
            </div>
            <div class="col-2"></div>
            <div class="col-lg-5 col-md-12 col-sm-12 form-column">
                <div class="contact-form-area">
                    <form id="ContactForm" action="" method="post">
                        {{--<form id="ContactForm" action="{{ route('public.contcat.email') }}" method="post">--}}
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="text" id="name" name="name" placeholder="Name">
                                <p id="messageName"></p>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="email" id="email" name="email" placeholder="Email">
                                <p id="messageEmail"></p>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="text" id="phone" name="phone" placeholder="Phone">
                                <p id="messagePhone"></p>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea id="message" name="message" placeholder="Message"></textarea>
                                <p id="messageMessage"></p>
                            </div>
                            <p id="messageForm"></p>
                            <br>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                <button type="submit">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{ URL::asset('validation/public/contactForm.js') }}"></script>
