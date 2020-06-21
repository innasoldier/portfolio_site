@extends('main')

@section('title', '| Home Page')

@section('content')
    <!-- Hero -->
    <div class="container py-5">
        <h1 class="display-2 pb-2">Junior Web Developer</h1>
        <hr class="border-3 border-white my-4 ml-0 text-left w-25" role="presentation">
        <div class="row">
            <div class="col-lg-8">
                <p class="font-serif lead mb-4 text-secondary">I am kick-starting my career in web development.
                    My main focus is on elegant designs powered by reliable, secure, and fast back-end technologies. </p>
                <p class="font-serif lead mb-4 text-secondary"> </p>
            </div>
        </div>
        <a href="/about" class="btn primary">About Me</a>
    </div>

    <!-- Projects -->
    <div class="container py-4">
        <ul class="row list-unstyled">
            <li class="col-md-6 mb-3">
                <a href="#">
                    <figure>
                        <div class="img-overlay mb-3">
                            <img src="{{ asset('images/blog.png') }}" alt="Architecture" class="img-thumbnail">
                            <div class="img-hover">
                                <p class="img-text">View Page</p>
                            </div>
                        </div>
                        <figcaption class="h5 font-weight-normal text-center">Travel Blog (Custom HTML/CSS)</figcaption>
                    </figure>
                </a>
            </li>

            <li class="col-md-6 mb-3">
                <a href="#">
                    <figure>
                        <div class="img-overlay mb-3">
                            <img src="{{ asset('images/gemalmaz.png') }}" alt="Interior Design" class="img-thumbnail">
                            <div class="img-hover">
                                <p class="img-text">View Page</p>
                            </div>
                        </div>
                        <figcaption class="h5 font-weight-normal text-center">Boat Tours Website (Custom HTML/CSS + JS)</figcaption>
                    </figure>
                </a>
            </li>

            <li class="col-md-6 mb-3">
                <a href="portfolio-3.html">
                    <figure>
                        <div class="img-overlay mb-3">
                            <img src="{{ asset('images/boat.png') }}" alt="Photography" class="img-thumbnail">
                            <div class="img-hover">
                                <p class="img-text">View Page</p>
                            </div>
                        </div>
                        <figcaption class="h5 font-weight-normal text-center">Boat Tours (PHP + MySQL)</figcaption>
                    </figure>
                </a>
            </li>

            <li class="col-md-6 mb-3">
                <a href="portfolio-4.html">
                    <figure>
                        <div class="img-overlay mb-3">
                            <img src="{{ asset('images/boat.png') }}" alt="Web Design" class="img-thumbnail">
                            <div class="img-hover">
                                <div class="img-text">View Page</div>
                            </div>
                        </div>
                        <figcaption class="h5 font-weight-normal text-center">BeeHive Social Network (React + Redux) </figcaption>
                    </figure>
                </a>
            </li>
        </ul>
        <div class="text-center my-5">
            <a href="pages.html" class="btn btn-outline-white">View all</a>
        </div>
    </div>
    <!-- Testimonials -->
    <div class="bg-white text-black">
        <div class="container py-6">
            <h2 class="h3 text-center mb-5">Strength</h2>
            <div class="row">
                <div class="col-md">
                    <blockquote class="text-center mb-5 mb-sm-0">
                        <img src="{{asset('images/html5-brands.svg')}}" class="avatar" alt="Tim Schoch">
                        <cite class="d-block h5 mb-1">HTML + CSS</cite>
                        <span class="small text-muted text-uppercase">HTML + CSS</span>
                        <p class="quote text-muted mt-3 mb-0">Focus theme is great. It really saves me time and effort. Thank you so much for your help</p>
                    </blockquote>
                </div>
                <div class="col-md">
                    <blockquote class="text-center mb-5 mb-md-0">
                        <img src="{{asset('images/react-brands.svg')}}" class="avatar avatar-lg mb-3" alt="Olive Mathews">
                        <cite class="d-block h5 mb-1">Olive Mathews</cite>
                        <span class="small text-muted text-uppercase">JavaScript + React</span>
                        <p class="quote text-muted mt-3 mb-0">Focus is great. I will refer everyone I know. This theme is worth much more than I paid. I'm loving it.</p>
                    </blockquote>
                </div>

                <div class="col-md">
                    <blockquote class="text-center">
                        <img src="{{asset('images/laravel-brands.svg')}}" class="avatar avatar-lg mb-3" alt="Malan Alankara">
                        <cite class="d-block h5 mb-1">Malan Alankara</cite>
                        <span class="small text-muted text-uppercase">PHP + Laravel</span>
                        <p class="quote text-muted mt-3 mb-0">Not able to tell you how happy I am with Focus. It's exactly what I've been looking for.</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to action -->
    <div class="bg-primary text-center">
        <div class="container py-6">
            <h2 class="font-sans-serif">I help you to design your ideal website</h2>
            <p class="lead mb-4">Impress your audiences with memorable pages that showcase your works</p>
            <a href="/contact" class="btn primary">Contact Me</a>
        </div>
    </div>
@endsection
