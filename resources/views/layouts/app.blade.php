<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, shrink-to-fit=YES">
    <title>Randoms | Design Studio</title>

    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WPF7HETN81"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-WPF7HETN81');
    </script>

    <!-- Vite Imports -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<nav class="navbar is-unselectable" role="navigation" aria-label="main navigation" style="padding-top: 1rem">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="/" style="outline: none">
                <img src="{{ asset('/assets/logo.svg') }}" alt="randoms logo" width="64" height="64">
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navBarContent" onclick="function handleMenuClick() {
                        let elem = document.querySelector('.navbar-burger');
                        elem.classList.toggle('is-active');
                        document.getElementById('navBarContent').classList.toggle('is-active');
                    } handleMenuClick()">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div id="navBarContent" class="navbar-menu">
            <div class="navbar-end">
                <div class="navbar-item has-text-centered">
                    <a class="button is-primary is-inverted is-rounded is-family-primary is-fullwidth" @if(Request::is("/")) href="#pricing" @endif>
                        <strong>Pricing</strong>
                    </a>
                </div>

                <div class="navbar-item has-text-centered">
                    <a class="button is-primary is-rounded is-family-primary is-fullwidth" href="/contact">
                        <strong>Contact Us</strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

@yield('content')

<footer class="section" style="padding-bottom: 8rem;">
    <div class="container">
        <div class="columns is-centered is-vcentered columns-reversed">
            <div class="column is-5 has-text-centered">
                <figure class="figure">
                    <img src="{{ asset('/assets/logo.svg') }}" style="height: 36px; width: 36px;">
                    <p class="has-text-dark is-size-7 mt-2">Made with <span class="has-text-primary">♥</span> and © by randoms</p>
                </figure>
            </div>

            <div class="column is-7">
                <div class="columns has-text-centered-mobile has-text-left-desktop">
                    <div class="column is-full-mobile">
                        <h1 class="title is-size-5 is-spaced">Useful Resources</h1>
                        <h2 class="subtitle is-size-6"><a href="https://play.google.com/store/apps/details?id=com.randoms.granthsahib">Granth Sahib ↗︎</a></h2>
                        <h2 class="subtitle is-size-6"><a href="https://play.google.com/store/apps/details?id=com.randoms.nitnem">Nitnem ↗︎</a></h2>
                        <h2 class="subtitle is-size-6"><a href="https://github.com/randoms-io">Github ↗︎</a></h2>
                    </div>

                    <div class="column is-full-mobile">
                        <h1 class="title is-size-5 is-spaced">Information</h1>
                        <h2 class="subtitle is-size-6"><a href="/#services">Services</a></h2>
                        <h2 class="subtitle is-size-6"><a href="/#pricing">Pricing</a></h2>
                        <h2 class="subtitle is-size-6"><a href="/contact">Contact Us</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
