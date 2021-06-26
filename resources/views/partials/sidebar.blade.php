<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        Checklister
    </div>
    <ul class="c-sidebar-nav ps ps--active-y">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{route('home')}}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-home"></use>
                </svg>
                Home
            </a>
        </li>
        <li class="c-sidebar-nav-title">Dashboard</li>
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a
                class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-book"></use>
                </svg>
                Pages</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{route('admin.pages.index')}}"><span
                            class="c-sidebar-nav-icon"></span> All pages</a></li>

            </ul>
        </li>
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="#" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                </svg>
                Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
        <div class="ps__rail-x" style="left: 0px; bottom: -118px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 118px; height: 626px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 100px; height: 526px;"></div>
        </div>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
            data-class="c-sidebar-minimized"></button>
</div>
