<!-- Start Header Style -->
<header id="header" class="htc-header">
    <!-- Start Mainmenu Area -->
    <div id="sticky-header-with-topbar" class="mainmenu__area d-none d-md-block sticky__header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3">
                    <div class="logo" >
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/logo/SLR.png') }}" alt="logo" style="max-width: 45%;">
                        </a>
                    </div>
                </div>
                <!-- Start MAinmenu Ares -->
                <div class="col-lg-8 col-md-7">
                    <nav class="mainmenu__nav">
                        <ul class="main__menu">
                            <li><a href="{{ url('/') }}"
                                   class="{{ Route::is('index') ? 'active' : '' }}">{{ __('Home') }}</a></li>
                            <li><a href="#">{{ __('About') }}</a></li>
                            <li><a href="{{ route('learn-guide') }}"
                                   class="{{ Route::is('learn-guide') ? 'active' : '' }}">{{ __('Learn Guide') }}</a>
                            </li>
                            <li><a href="#">{{ __('Blog') }}</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- End MAinmenu Ares -->

                {{--                <div class="col-lg-2 col-md-1">--}}
                {{--                    <nav class="mainmenu__nav">--}}
                {{--                        <ul class="main__menu">--}}
                {{--                            <li class="drop"><a href="{{ route('filament.admin.auth.login') }}">Login</a></li>--}}
                {{--                            <li class="drop"><a href="{{ route('filament.admin.auth.register') }}">Register</a></li>--}}
                {{--                        </ul>--}}
                {{--                    </nav>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
    <!-- End Mainmenu Area -->
    <!-- Mobile-menu-area start -->
    <div class="mobile-menu-area d-block d-md-none">
        <div class="fluid-container mobile-menu-container">
            <div class="mobile-logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/images/logo/SLR.png') }}" alt="Mobile logo">
                </a>
            </div>
            <div class="mobile-menu clearfix">
                <nav id="mobile_dropdown">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Learn Guide</a></li>
                        <li><a href="#">Blog</a></li>
                   </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Mobile-menu-area End -->
</header>
<!-- End Header Style -->
