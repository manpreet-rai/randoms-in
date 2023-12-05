@extends('layouts.app')

@section('content')
    <section class="hero has-text-centered is-white py-6">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered is-vcentered columns-ordered">
                    <div class="column has-text-dark is-family-secondary has-text-centered-mobile has-text-left-desktop">
                        <h1 class="is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-weight-bold">Take your business to every mobile device</h1>
                        <h2 class="is-size-5-mobile is-size-4-tablet is-size-3-desktop has-text-weight-semibold my-2">Design android & iOS apps</h2>
                        <div class="my-4">
                            <a class="button is-primary is-family-primary is-rounded has-text-weight-semibold" href="#mobile-apps" style="outline: none;">Learn More</a>
                        </div>
                    </div>
                    <div class="column">
                        <figure class="image selectDisable">
                            <img src="{{ asset('/assets/mobileapps_icon.svg') }}" style="max-width: 100%; max-height: 100%;">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero has-text-centered is-white py-6" style="background-color: hsl(292, 82%, 39%); position: relative;">
        <div class="shape" style="transform: translateY(-70%);">
            <svg width="100%" viewBox="0 0 1770 256" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(0.00 -3496.00)" fill="#9E12B4">
                        <g transform="translate(-128.00, 3472.00)">
                            <path d="M0,0 C592.866612,187.384575 1232.86662,247.358093 1920,179.920552 L1920,256 L0,256 L0,0 Z" id="Path"></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>

        <div class="hero-body">
            <div class="container is-narrow">
                <div class="columns is-centered is-vcentered columns-reversed">
                    <div class="column">
                        <figure class="image selectDisable">
                            <img src="{{ asset('/assets/webapps_icon.svg') }}" style="max-width: 100%; max-height: 100%">
                        </figure>
                    </div>
                    <div class="column has-text-light is-family-secondary has-text-centered-mobile has-text-right-desktop">
                        <h1 class="is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-weight-bold">Dominate internet with your services</h1>
                        <h2 class="is-size-5-mobile is-size-4-tablet is-size-3-desktop has-text-weight-semibold my-2">Create web & desktop apps</h2>
                        <div class="my-4">
                            <a class="button is-primary is-family-primary is-inverted is-rounded has-text-weight-semibold" href="#web-apps" style="outline: none;">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hero has-text-centered is-white py-6" style="position: relative;">
        <div class="shape" style="transform: translateY(-85%);">
            <svg width="100%" viewBox="0 0 1910 250" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Wedge" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Secondary" transform="translate(5.000000, -2703.000000)" fill="#FFFFFF">
                        <g id="Layer3" transform="translate(-10.000000, 2703.000000)">
                            <path d="M0,0 C592.969138,186.95867 1233.07982,246.795875 1920.33203,179.511612 L1920.33203,255.41814 L0,255.41814 L0,0 Z" id="Path" transform="translate(960.166016, 127.709070) scale(-1, 1) translate(-960.166016, -127.709070)"></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>

        <div class="hero-body">
            <div class="container is-narrow">
                <div class="columns is-centered is-vcentered columns-ordered">
                    <div class="column has-text-dark is-family-secondary has-text-centered-mobile has-text-left-desktop">
                        <h1 class="is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-weight-bold">Get assets for social media marketing or UI/UX</h1>
                        <h2 class="is-size-5-mobile is-size-4-tablet is-size-3-desktop has-text-weight-semibold my-2">Artwork for your big ideas</h2>
                        <div class="my-4">
                            <a class="button is-primary is-family-primary is-rounded has-text-weight-semibold" href="#assets" style="outline: none;">Learn More</a>
                        </div>
                    </div>
                    <div class="column">
                        <figure class="image selectDisable">
                            <img src="{{ asset('/assets/assets_icon.svg') }}" style="max-width: 100%; max-height: 100%">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="section has-text-centered" style="padding-bottom: 14rem; margin-top: 4rem; background-color: #FCEEFF; position: relative; border-bottom: 1px solid #9E12B4;">
        <div class="shape" style="transform: translateY(-70%);">
            <svg width="100%" viewBox="0 0 1440 104" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="wide" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Compare" transform="translate(-10.000000, -595.000000)" fill-rule="nonzero">
                        <path d="M0,616.015057 C226.18823,607.704441 619.782098,683.000403 937.197178,644.895658 C1254.61226,606.790914 1775.45101,550.140302 1955.10881,623.949738 L1955.10881,679.330191 C977.554408,703.389168 325.851468,703.389168 0,679.330191" id="Path-3" fill="#9E12B4"></path>
                        <path d="M0,617.015057 C226.18823,608.704441 619.782098,684.000403 937.197178,645.895658 C1254.61226,607.790914 1775.45101,551.140302 1955.10881,624.949738 L1955.10881,680.330191 C977.554408,704.389168 325.851468,704.389168 0,680.330191" id="Path-3" fill="#FCEEFF"></path>
                    </g>
                </g>
            </svg>
        </div>

        <div class="container">
            <div class="columns is-centered has-text-dark">
                <div class="column is-7">
                    <h1 class="is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-weight-bold is-family-secondary">Services at a Glance</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section has-text-centered" style="margin-top: -14rem; padding-bottom: 2rem;">
        <div class="container">
            <div class="columns is-centered is-multiline">
                <div class="column is-full-mobile is-one-third-desktop" id="mobile-apps">
                    <div class="box services">
                        <div class="content">
                            <figure class="image"><img src="{{ asset('/assets/phone_icon.svg') }}" style="max-height: 48px;"></figure>
                            <h1 class="has-text-dark is-family-secondary is-size-5">Android & iOS Apps</h1>
                            <p class="has-text-dark is-size-6">We value modern, sleek and minimalistic UI/UX design, thoughtful interactions and organized content</p>
                            <h1 class="has-text-primary is-family-secondary is-size-5">Backend</h1>
                            <ul style="list-style-type:none; margin: 0;">
                                <li>Kotlin</li>
                                <li>Swift</li>
                                <li>React Native</li>
                                <li>Flutter</li>
                                <li>Java</li>
                                <li>Objective-C</li>
                            </ul>
                            <h1 class="has-text-primary is-family-secondary is-size-5">Tools</h1>
                            <ul style="list-style-type:none; margin: 0;">
                                <li>Android Studio</li>
                                <li>XCode</li>
                                <li>VSCode</li>
                                <li>WebStorm</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="column is-full-mobile is-one-third-desktop" id="web-apps">
                    <div class="box services">
                        <div class="content">
                            <figure class="image"><img src="{{ asset('/assets/mac_icon.svg') }}" style="max-height: 48px;"></figure>
                            <h1 class="has-text-dark is-family-secondary is-size-5">Web & Desktop Apps</h1>
                            <p class="has-text-dark is-size-6">We love to put things together for greater, better and compelling websites, web apps and desktop apps</p>
                            <h1 class="has-text-primary is-family-secondary is-size-5">Backend</h1>
                            <ul style="list-style-type:none; margin: 0;">
                                <li>HTML 5</li>
                                <li>CSS 3</li>
                                <li>Laravel</li>
                                <li>React</li>
                                <li>MySQL</li>
                                <li>MongoDB</li>
                            </ul>
                            <h1 class="has-text-primary is-family-secondary is-size-5">Tools</h1>
                            <ul style="list-style-type:none; margin: 0;">
                                <li>PhpStorm</li>
                                <li>VSCode</li>
                                <li>WebStorm</li>
                                <li>Github</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="column is-full-mobile is-one-third-desktop" id="assets">
                    <div class="box services">
                        <div class="content">
                            <figure class="image"><img src="{{ asset('/assets/artwork_icon.svg') }}" style="max-height: 48px;"></figure>
                            <h1 class="has-text-dark is-family-secondary is-size-5">Graphic Design Assets</h1>
                            <p class="has-text-dark is-size-6">We design everything from social media ad campaign posters to user interfaces, perfect for every type of need</p>
                            <h1 class="has-text-primary is-family-secondary is-size-5">Categories</h1>
                            <ul style="list-style-type:none; margin: 0;">
                                <li>Posters</li>
                                <li>Flyers</li>
                                <li>Logos</li>
                                <li>Infographics</li>
                                <li>UI / UX</li>
                                <li>Mockups</li>
                            </ul>
                            <h1 class="has-text-primary is-family-secondary is-size-5">Tools</h1>
                            <ul style="list-style-type:none; margin: 0;">
                                <li>Illustrator</li>
                                <li>Sketch</li>
                                <li>Figma</li>
                                <li>Pixelmator</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section has-text-centered has-background-primary" style="margin-top: 4rem; padding-bottom: 12rem;">
        <div class="container" id="pricing">
            <h1 class="is-size-3-mobile is-size-2-tablet is-size-1-desktop has-text-weight-bold is-family-secondary has-text-light" style="margin-bottom: 3rem;">Pricing</h1>
            <div class="box py-6">
                <div class="columns is-centered is-multiline">
                    <div class="column is-full-mobile is-one-third-tablet">
                        <div class="content">
                            <h1 class="has-text-dark is-family-secondary is-size-5 has-text-weight-semibold">Mobile Apps</h1>
                            <p class="has-text-dark is-size-6 is-family-primary" style="margin-bottom: 0; margin-top: 1rem;">Starts at</p>
                            <h1 class="has-text-primary is-family-primary is-size-1 has-text-weight-semibold" style="margin: 0;"><span class="is-size-4 has-text-dark">₹</span>24,999<span class="is-size-5 has-text-dark">/app</span></h1>
                            <h1 class="has-text-dark is-family-secondary is-size-5">Includes</h1>
                            <ul class="has-text-left feature-list" style="list-style-type:none; margin: 0; float: left; padding-left: 2rem;">
                                <li><span class="has-text-success">✔︎</span> Technical support for 1 year</li>
                                <li><span class="has-text-success">✔︎</span> All in-app assets and branding</li>
                                <li><span class="has-text-success">✔︎</span> Private beta release channels</li>
                                <li><span class="has-text-success">✔︎</span> Publishing on Play Store / iOS App Store</li>
                                <li><span class="has-text-success">✔︎</span> Privacy policy generation & hosting</li>
                                <li><span class="has-text-success">✔︎</span> Eligible for 10% bundled discount</li>
                                <li><span class="has-text-info-dark">⚠</span> iOS apps cost 15-20% more than android</li>
                                <li><span class="has-text-info-dark">⚠</span> Pay as per feature model available</li>
                            </ul>
                        </div>
                        <a class="button is-primary is-family-primary is-rounded has-text-weight-semibold" href="/contact" style="outline: none; margin-top: 1rem; width: 60%;">Choose</a>
                    </div>

                    <div class="column is-full-mobile is-one-third-tablet pricing-column">
                        <div class="content">
                            <h1 class="has-text-dark is-family-secondary is-size-5 has-text-weight-semibold">Web & Desktop Apps</h1>
                            <p class="has-text-dark is-size-6 is-family-primary" style="margin-bottom: 0; margin-top: 1rem;">Starts at</p>
                            <h1 class="has-text-primary is-family-primary is-size-1 has-text-weight-semibold" style="margin: 0;"><span class="is-size-4 has-text-dark">₹</span>12,999<span class="is-size-5 has-text-dark">/app</span></h1>
                            <h1 class="has-text-dark is-family-secondary is-size-5">Includes</h1>
                            <ul class="has-text-left feature-list" style="list-style-type:none; margin: 0; float: left; padding-left: 2rem;">
                                <li><span class="has-text-success">✔︎</span> Technical support for 1 year</li>
                                <li><span class="has-text-success">✔︎</span> 1 static website based on template</li>
                                <li><span class="has-text-success">✔︎</span> 1 year of domain and hosting</li>
                                <li><span class="has-text-success">✔︎</span> 1 professional email account</li>
                                <li><span class="has-text-success">✔︎</span> All in-app assets and branding</li>
                                <li><span class="has-text-success">✔︎</span> Eligible for 10% bundled discount</li>
                                <li><span class="has-text-info-dark">⚠</span> Dynamic apps cost 15-20% more</li>
                                <li><span class="has-text-info-dark">⚠</span> Pay as per feature model available</li>
                            </ul>
                        </div>
                        <a class="button is-primary is-family-primary is-rounded has-text-weight-semibold" href="/contact" style="outline: none; margin-top: 1rem; width: 60%;">Choose</a>
                    </div>

                    <div class="column is-full-mobile is-one-third-tablet pricing-column">
                        <div class="content">
                            <h1 class="has-text-dark is-family-secondary is-size-5 has-text-weight-semibold">Graphic Design Assets</h1>
                            <p class="has-text-dark is-size-6 is-family-primary" style="margin-bottom: 0; margin-top: 1rem;">Starts at</p>
                            <h1 class="has-text-primary is-family-primary is-size-1 has-text-weight-semibold" style="margin: 0;"><span class="is-size-4 has-text-dark">₹</span>699<span class="is-size-5 has-text-dark">/asset</span></h1>
                            <h1 class="has-text-dark is-family-secondary is-size-5">Includes</h1>
                            <ul class="has-text-left feature-list" style="list-style-type:none; margin: 0; float: left; padding-left: 2rem;">
                                <li><span class="has-text-success">✔︎</span> 1 vector source file</li>
                                <li><span class="has-text-success">✔︎</span> No watermark applied</li>
                                <li><span class="has-text-success">✔︎</span> No attribution required</li>
                                <li><span class="has-text-success">✔︎</span> Personal and commercial license</li>
                                <li><span class="has-text-success">✔︎</span> 2 design updates allowed</li>
                                <li><span class="has-text-success">✔︎</span> Eligible for 10% bundled discount</li>
                                <li><span class="has-text-info-dark">⚠</span> Brand logos cost could vary</li>
                                <li><span class="has-text-info-dark">⚠</span> Online ad campaigns also available</li>
                            </ul>
                        </div>
                        <a class="button is-primary is-family-primary is-rounded has-text-weight-semibold" href="/contact" style="outline: none; margin-top: 1rem; width: 60%;">Choose</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section has-text-centered" style="margin-top: -8.5rem; padding-bottom: 4rem;">
        <div class="container">
            <div class="box has-background-black" style="padding: 4rem;">
                <div class="columns is-multiline is-vcentered is-centered">
                    <div class="column is-9-desktop is-full-mobile has-text-left-desktop has-text-centered-mobile">
                        <h1 class="title has-text-white is-size-4">Have a project to discuss? Let's talk. First call is on us.</h1>
                    </div>
                    <div class="column is-3-desktop is-full-mobile has-text-right-desktop has-text-centered-mobile">
                        <a class="button is-primary is-rounded is-medium" href="/contact" style="width: 100%;"><b>Let's do this</b></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(session('status'))
        <div class="notification is-success has-text-centered has-text-weight-bold" style="position: fixed; top: 5.5rem; left: 2rem; right: 2rem; z-index: 99;">
            <button class="delete"></button>
            {{ session('status') }}
        </div>
    @endif
@endsection
