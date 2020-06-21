@extends('main')

@section('content')
    <!-- Hero -->
    <div class="container py-5">
        <h1 class="display-2 pb-2 text-focus-in">My Recent Work</h1>
        <hr class="border-3 border-white my-4 ml-0 text-left w-25" role="presentation">
        <div class="row">
            <div class="col-lg-8">
                <p class="font-serif lead mb-4 text-secondary">Showcase of my designing, coding, and programming skills</p>
            </div>
        </div>
    </div>

    <!-- Projects -->
    <div class="container py-4">
        <ul class="row list-unstyled">
            <li class="col-md-6 mb-3">
                <a href="https://travelblog.innaweb.tech">
                    <figure>
                        <div class="img-overlay mb-3">
                            <img src="{{ asset('images/blog.png') }}" alt="Architecture" class="img-thumbnail">
                        </div>
                        <figcaption class="h5 font-weight-normal text-muted text-center">Travel Blog (Custom HTML/CSS)</figcaption>
                    </figure>
                </a>
            </li>


            <li class="col-md-6 mb-3">
                <a href="https://travelblog.innaweb.tech">

                    <div class="img-overlay mb-3">
                        <figcaption class="h5 font-weight-normal">
                            <h4>A Travel blog built with custom HTML + CSS. Fully responsive and cross-browser.</h4>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Photoshop</li>
                                <li class="list-group-item">HTML</li>
                                <li class="list-group-item">CSS</li>
                                <li class="list-group-item">Fully responsive</li>
                                <li class="list-group-item">Cross-browser</li>
                            </ul>
                        </figcaption>
                    </div>
                </a>
            </li>

            <li class="col-md-6 mb-3">
                <a href="http://gemalmaz.com">

                        <div class="img-overlay mb-3">
                            <figcaption class="h5 font-weight-normal">
                                <h4>Boat Tours business website built with custom HTML/CSS, JS and PHP.</h4>

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">HTML</li>
                                    <li class="list-group-item">CSS</li>
                                    <li class="list-group-item">JavaScript</li>
                                    <li class="list-group-item">jQuery</li>
                                    <li class="list-group-item">PHP</li>
                                    <li class="list-group-item">Fully responsive</li>
                                </ul>
                            </figcaption>
                        </div>
                </a>
            </li>

            <li class="col-md-6 mb-3">
                <a href="http://gemalmaz.com">
                    <figure>
                        <div class="img-overlay mb-3">
                            <img src="{{ asset('images/gemalmaz.png') }}" alt="Web Design" class="img-thumbnail">
                        </div>
                        <figcaption class="h5 font-weight-normal text-muted text-center">Boat Tours Website (Custom HTML/CSS + JS) </figcaption>
                    </figure>
                </a>
            </li>
        </ul>
        <div class="text-center my-5">
            <a href="pages.html" class="btn btn-outline-white">View all</a>
        </div>
    </div>

    @endsection
