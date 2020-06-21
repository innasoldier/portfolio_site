@extends('main')

@section('content')
    <!-- Hero -->
    <div class="container py-5">
        <h1 class="display-2 pb-2 text-focus-in">Meet Inna</h1>
        <hr class="border-3 border-white my-4 ml-0 text-left w-25" role="presentation">
        <div class="row">
            <div class="col-lg-8">
                <p class="font-serif lead mb-4 text-secondary">A talented and creative developer with a passion to programming</p>
            </div>
        </div>
    </div>


    <!-- Skills -->
    <div class="bg-white text-black">
        <div class="container py-6">
            <h3 class="h3 text-center mb-5 font-sans-serif">Strength</h3>
            <div class="row">
                <div class="col-md">
                    <blockquote class="text-center mb-5 mb-sm-0">
                        <i class="fas fa-paint-brush fa-7x"></i><br>
                        <span class="small text-muted text-uppercase">Photoshop + Adobe Animate</span>
                        <p class="quote text-muted mt-3 mb-0">A confident user of Photoshop, Illustrator. I like to create graphics and animations with Adobe Animate</p>
                </div>
                <div class="col-md">
                    <blockquote class="text-center mb-5 mb-sm-0">
                        <i class="far fa-file-code fa-7x"></i><br>
                        <span class="small text-muted text-uppercase">HTML + CSS</span>
                        <p class="quote text-muted mt-3 mb-0">Fundamental knowledge of HTML, CSS, and SCSS. Confident in using Bootstrap and Bulma frameworks. </p>
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
