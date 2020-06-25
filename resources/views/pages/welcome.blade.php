@extends('main')

@section('title', '| Home Page')

@section('content')
    <!-- Hero -->
    <div class="container py-5">
        <h1 class="display-2 pb-2 text-focus-in">Junior Web Developer</h1>
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
                <a href="https://travelblog.innaweb.tech">
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
                <a href="http://gemalmaz.com">
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
                <a href="http://capstone.innaweb.tech">
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
                <a href="#">
                    <figure>
                        <div class="img-overlay mb-3">
                            <img src="{{ asset('images/default.png') }}" alt="Web Design" class="img-thumbnail shadow-drop-2-center">
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
            <a href="/projects" class="btn btn-outline-white">View all</a>
        </div>
    </div>
    <!-- Testimonials -->
    <div class="bg-white text-black">
        <div class="container py-6">
            <h3 class="h3 text-center mb-5 font-sans-serif">Strength</h3>
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
                        <p class="quote text-muted mt-3 mb-0">Core knowledge of the Vanilla JavaScript, jQuery, VueJS. Actively learning React and Redux while developing a social network app</p>
                    </blockquote>
                </div>

                <div class="col-md">
                    <blockquote class="text-center">
                        <i class="fab fa-laravel fa-7x"></i><br>
                        <span class="small text-muted text-uppercase">PHP + Laravel</span>
                        <p class="quote text-muted mt-3 mb-0">Confident in programming with PHP (this website was built with Laravel). Ajax, MySQL, SQLite, REST API</p>
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
