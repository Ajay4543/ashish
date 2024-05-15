<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Furni</title>
</head>

<body>

    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="/">Furni<span>.</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="{{ request()->is('/') ? 'nav-item active' : '' }}"><a class="nav-link"
                            href="/">Home</a></li>
                    <li class="{{ request()->is('shop') ? 'nav-item active' : '' }}"><a class="nav-link"
                            href="/shop">Shop</a></li>
                    <li class="{{ request()->is('about-us') ? 'nav-item active' : '' }}"><a class="nav-link"
                            href="/about-us">About us</a></li>
                    <li class="{{ request()->is('services') ? 'nav-item active' : '' }}"><a class="nav-link"
                            href="/services">Services</a></li>
                    <li class="{{ request()->is('blog') ? 'nav-item active' : '' }}"><a class="nav-link"
                            href="/blog">Blog</a></li>
                    <li class="{{ request()->is('contact-us') ? 'nav-item active' : '' }}"><a class="nav-link"
                            href="/contact-us">Contact us</a></li>
                </ul>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">

                    <li class="position-relative">
                        <span id="accountIcon" class="nav-link"><img src="{{ asset('images/user.svg') }}"></span>
                        <div id="accountDropdown" class="d-none position-absolute d-flex flex-column gap-2 px-4 py-3 bg-white rounded fs-6" style="z-index: 100; width: 120px">
                            <a href="/signin">Sign In</a>
                            <a href="/signup">Sign Up</a>
                        </div>
                    </li>

                    <li>
                        <a class="nav-link" href="/cart"><img src="{{ asset('images/cart.svg') }}"></a>
                    </li>

                </ul>
            </div>
        </div>

    </nav>
    <!-- End Header/Navigation -->


    {{ $slot }}


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
