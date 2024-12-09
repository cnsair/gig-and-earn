<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/images/logo/logo.png') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#about.html" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{ route('contact-us') }}" class="nav-link">Contact Us</a></li>
                <li class="nav-item cta mr-md-2"><a href="{{ route('find-job') }}" class="nav-link">Find your
                        Gig</a></li>
                <li class="nav-item cta cta-colored"><a href="{{ route('login') }}" class="nav-link">Sign-in</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->