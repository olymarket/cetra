@extends('Components.Public.Navigations.Master')

@section('content')
    <section class="page-title centred" style="background-image: url({{ asset($imageLarge_4 ?? '') }});">
        <div class="container">
            <div class="content-box">
                <h1>{{ $title_4 ?? '' }}</h1>
            </div>
        </div>
    </section>
    <div class="padding-top-100"></div>

    <div id="showPost"></div>
    
    <script src="{{ URL::asset('/validation/public/blogShow.js') }}"></script>
@endsection
