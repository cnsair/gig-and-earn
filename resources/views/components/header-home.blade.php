<div class="header-area header-transparrent">
    <div class="headder-top header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-2">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo/logo.png') }}" alt=""></a>
                    </div>  
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="menu-wrapper">
                        <!-- Main-menu -->
                        <div class="main-menu">
                            <nav class="d-none d-lg-block">
                                <ul id="navigation">
                                    <li><a active href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('find-job') }}">Find a Gig</a></li>
                                    <li><a href="{{ route('how-it-works') }}">How it works</a></li>
                                    <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>          
                        <!-- Header-btn -->
                        <div class="header-btn d-none f-right d-lg-block">
                            <a href="{{ route('register') }}" class="btn head-btn1">Register</a>
                            <a href="{{ route('login') }}" class="btn head-btn2">Login</a>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none hidden sm:flex-1 sm:flex sm:items-center sm:justify-between sm:hidden">
                        <a href="{{ route('register') }}" class="btn head-btn1">Register</a>
                        <a href="{{ route('login') }}" class="btn head-btn2">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>