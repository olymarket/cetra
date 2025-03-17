<!-- Menu 1 Start -->
<header class="main-header header-style-one">
    <div class="outer-container">
        <div class="outer-box clearfix">
            <div class="pull-left logo-box">
                <figure class="logo logo-menu-1"><a href="{{ route('public.home.index') }}"><img src="{{ asset('storage/icon/logo.webp') }}" alt="Logo"></a>
                </figure>
            </div>
            <div class="pull-right nav-toggler">
                <button class="nav-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </div>
    </div>

    <!-- Menu scroll start -->
    <div class="sticky-header">
        <div class="container clearfix">
            <figure class="logo-box logo-menu-1-1"><a href="{{ route('public.home.index') }}"><img src="{{ asset('storage/icon/logo.webp') }}" alt="Logo"></a>
            </figure>
            <div class="menu-area">
                <nav class="main-menu navbar-expand-lg">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class=""><a href="{{ route('public.home.index') }}">Home</a>
                            </li>
                            <li class=""><a href="{{ route('public.about.index') }}">ABOUT</a>
                            </li>
                            <li class=""><a href="{{ route('public.pressroom.index') }}">PRESS ROOM</a>
                            </li>
                            <li class=""><a href="{{ route('public.familycorner.index') }}">FAMILY CORNER</a>
                            </li>
                            <li class="dropdown"><a href="{{ route('public.services.index') }}">SERVICES</a>
                                <ul>
                                    <li><a href="{{ route('public.familycorner.rs') }}">RELOCATION SERVICE</a></li>
                                    <li><a href="{{ route('public.familycorner.as') }}">ADDITIONAL SERVICES</a></li>
                                    <li><a href="{{ route('public.familycorner.mm') }}">MOVE MANAGEMENT</a></li>
                                    <li><a href="{{ route('public.familycorner.cs') }}">CORPORATE SERVICES</a></li>
                                </ul>
                            </li>
                            <li class=""><a href="{{ route('public.contcat.index') }}">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Menu scroll end -->
</header>
<!-- Menu 1 End -->

<!--Form Back Drop-->
<div class="form-back-drop"></div>

<!-- Menu 2 Start -->
<section class="hidden-bar">
    <div class="inner-box">
        <div class="cross-icon"><span class="fa fa-times"></span></div>
        <!-- logo -->
        <div class="logo-box centred logo-menu-1-1">
            <a href="{{ route('public.home.index') }}">
                <figure><img src="{{ asset('storage/icon/logo.webp') }}" alt="Logo"></figure>
            </a>
        </div>
        <!-- side menu -->
        <div class="side-menu">
            <ul class="clearfix">
                <li class=""><a href="{{ route('public.home.index') }}">HOME</a>
                </li>
                <li class=""><a href="{{ route('public.about.index') }}">ABOUT</a>
                </li>
                <li class=""><a href="{{ route('public.pressroom.index') }}">PRESS ROOM</a>
                </li>
                <li class=""><a href="{{ route('public.familycorner.index') }}">FAMILY CORNER</a>
                </li>
                <li class="dropdown"><a href="{{ route('public.services.index') }}">SERVICES</a>
                    <ul>
                        <li><a href="{{ route('public.familycorner.rs') }}">RELOCATION SERVICE</a></li>
                        <li><a href="{{ route('public.familycorner.as') }}">ADDITIONAL SERVICES</a></li>
                        <li><a href="{{ route('public.familycorner.mm') }}">MOVE MANAGEMENT</a></li>
                        <li><a href="{{ route('public.familycorner.cs') }}">CORPORATE SERVICES</a></li>
                    </ul>
                </li>
                <li class=""><a href="{{ route('public.contcat.index') }}">CONTACT</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- Menu 2 End -->
