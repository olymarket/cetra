<div class="header">
    <div class="header-left">
        <div class="menu-icon bi bi-list"></div>
    </div>
    <div class="header-right">
        @guest
        @else
            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon">
                            <img src="{{ url('storage/icon/user.webp') }}" alt="user" />
                        </span>
                        @isset(Auth::user()->name)
                            <span class="user-name">{{ Auth::user()->name }}</span>
                        @endisset
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="{{ route('public.logout') }}"><i class="dw dw-logout"></i>LOG OUT</a>
                    </div>
                </div>
            </div>
        @endguest
    </div>
</div>

<div class="left-side-bar">
    <div class="brand-logo">
        <a href="javascript:;">
            <img src="{{ url('storage/icon/logo.webp') }}" alt="logo" width="100" class="light-logo" />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="{{ route('public.home.index') }}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-house"></span><span class="mtext">Back to Home</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-book"></span><span class="mtext">Blog</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('admin.blog.index') }}">List</a></li>
                        <li><a href="{{ route('admin.blog.create') }}">Create</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-bookmark-check"></span><span class="mtext">Category</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="">List</a></li>
                        <li><a href="">Create</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
