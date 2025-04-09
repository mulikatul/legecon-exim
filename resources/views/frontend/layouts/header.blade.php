<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="/" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{asset('frontend/assets/img/logo.png')}}" alt="">
            <h1 class="sitename">Legecon Exim</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/" class="">Home<br></a></li>
                <li><a href="{{route('frontend.about-us')}}" class="">About Us</a></li>
                <li><a href="#services" class="">Services</a></li>
                <li><a href="{{route('frontend.contact-us')}}" class="">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted flex-md-shrink-0" href="index.html#about">Get Started</a>

    </div>
</header>