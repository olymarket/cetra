<header class="main-header header-style-three">
    <!-- Menu 1 Start -->
    <div class="header-upper">
        <div class="container">
            <div class="inner-container clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo logo-menu-1"><a href="{{ route('public.home.index') }}"><img src="{{ asset('storage/icon/logo.webp') }}"
                                alt="Logo"></a>
                    </figure>
                </div>
                <div class="nav-outer clearfix">
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
                                    @guest
                                    <li class=""><a href="{{ route('public.login.index') }}">Login</a></li>
                                    @else
                                        @if (Auth::user()->idRole == 1)
                                            <li class=""><a href="{{ route('admin.blog.index') }}">"PANEL ADMIN"</a></li>
                                        @endif
                                    @endguest
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu 1 End -->

    <!-- Menu 2 Start -->
    <div class="sticky-header">
        <div class="container clearfix">
            <figure class="logo-box logo-menu-1-1"><a href="{{ route('public.home.index') }}"><img src="{{ asset('storage/icon/logo.webp') }}"
                        alt="Logo"></a>
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
                </nav>
            </div>
        </div>
    </div>
    <!-- Menu 2 Start -->
</header>
