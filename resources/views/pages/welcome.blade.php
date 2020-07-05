@extends('main')

@section('title', '| Home Page')

@section('content')
    <!-- Hero -->
    <div class="container py-5 col-lg-10 hero">
        <h1 class="display-2 pb-2 text-focus-in">Web Developer</h1>
        <hr class="border-3 border-white my-4 ml-0 text-left w-25" role="presentation">
        <div class="row">
            <div class="col-lg-8">
                <p class="font-serif lead mb-4 text-secondary">IT enthusiast with a diverse set of skills, ranging from design, HTML/CSS and JavaScript all the way to PHP and Python.
                    My main focus is on elegant and unique designs powered by reliable, secure, and fast back-end technologies. </p>
                <p class="font-serif lead mb-4 text-secondary"> </p>
            </div>
        </div>
        <a href="/about" class="btn primary">About Me</a>
    </div>

    <!-- Projects -->
    <div class="container py-5 col-lg-10 projects">
        <h3 class="h3 text-center mb-5 font-sans-serif" style="color:white">Projects</h3>

        <ul class="row list-unstyled">
            <li class="col-md-6 mb-3">
                <a href="https://travelblog.innaweb.tech">
                    <figure>
                        <div class="img-overlay mb-3">
                            <img src="{{ asset('images/blog.png') }}" alt="Architecture" class="img-thumbnail">
                            <div class="img-hover">
                                <p class="img-text">View Page</p>
                            </div>
                        </div>
                        <figcaption class="h5 font-weight-normal text-muted text-center">Travel Blog</figcaption>
                    </figure>
                </a>
            </li>

            <li class="col-md-6 mb-3">
                <a href="https://travelblog.innaweb.tech">
                    <figure>
                        <div class="img-overlay mb-3">
                            <img src="{{ asset('images/lifehackers.png') }}" alt="Architecture" class="img-thumbnail">
                            <div class="img-hover">
                                <p class="img-text">View Page</p>
                            </div>
                        </div>
                        <figcaption class="h5 font-weight-normal text-muted text-center">LifeHackers React App</figcaption>
                    </figure>
                </a>
            </li>

        </ul>

        <div class="text-center mb-3">
            <a href="/projects" class="btn btn-outline-white">View all</a>
        </div>
    </div>
    <!-- Testimonials -->
    <div class="bg-white text-black">
        <div class="container py-6 col-md-8">
            <h3 class="h3 text-center mb-5 font-sans-serif">Skills</h3>
            <div class="row">
                <div class="col-md">
                    <blockquote class="text-center mb-5 mb-sm-0">
                        <i class="far fa-file-code fa-7x"></i><br>
                        <span class="small text-muted text-uppercase">HTML + CSS</span>
                        <p class="quote text-muted mt-3 mb-0">Fundamental knowledge of HTML, CSS, and SCSS. Confident in using Bootstrap and Bulma frameworks. </p>
                    </blockquote>
                </div>
                <div class="col-md">
                    <blockquote class="text-center mb-5 mb-md-0">
                        <i class="fab fa-react fa-7x"></i><br>
                        <span class="small text-muted text-uppercase">JavaScript + React</span>
                        <p class="quote text-muted mt-3 mb-0">Core knowledge of the Vanilla JavaScript, jQuery. Experience with React, Redux, Firebase, REST APIs</p>
                    </blockquote>
                </div>

                <div class="col-md">
                    <blockquote class="text-center">
                        <i class="fab fa-laravel fa-7x"></i><br>
                        <span class="small text-muted text-uppercase">PHP + Laravel</span>
                        <p class="quote text-muted mt-3 mb-0">Confident in programming with PHP. Experience with Laravel, Ajax, MySQL, SQLite</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to action -->
    <div class="bg-primary text-center">
        <div class="container py-6">
            <h2 class="font-sans-serif">Eager to put my creative ideas into code</h2>
            <p class="lead mb-4">As a fast-learner and a highly motivated individual, I am looking for a job placement in a company that shares my passion for programming and building outstanding products.</p>
            <a href="/contact" class="btn primary">Contact Me</a>
        </div>
    </div>
@endsection
