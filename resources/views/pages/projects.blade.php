@extends('main')

@section('content')
    <!-- Hero -->
    <div class="container py-5 col-lg-10">
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
                <a href="https://github.com/innasoldier/lifehackers.git">

                        <div class="img-overlay mb-3">
                            <figcaption class="h5 font-weight-normal">
                                <h4>A real-world web application with React JS and Firebase (developing)</h4>

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">JavaScript, ES6</li>
                                    <li class="list-group-item">Functional, class components, HOC</li>
                                    <li class="list-group-item">State Management, Redux</li>
                                    <li class="list-group-item">Authentication</li>
                                    <li class="list-group-item">Messages feature</li>
                                </ul>
                            </figcaption>
                        </div>
                </a>
            </li>

            <li class="col-md-6 mb-3">
                <a href="https://github.com/innasoldier/lifehackers.git">
                    <figure>
                        <div class="img-overlay mb-3">
                            <img src="{{ asset('images/lifehackers.png') }}" alt="Web Design" class="img-thumbnail">
                        </div>
                        <figcaption class="h5 font-weight-normal text-muted text-center">LifeHackers React App </figcaption>
                    </figure>
                </a>
            </li>

            <li class="col-md-6 mb-3">
                <a href="http://capstone.innaweb.tech">
                    <figure>
                        <div class="img-overlay mb-3">
                            <img src="{{ asset('images/boat.png') }}" alt="Architecture" class="img-thumbnail">
                        </div>
                        <figcaption class="h5 font-weight-normal text-muted text-center">Blue Voyage</figcaption>
                    </figure>
                </a>
            </li>


            <li class="col-md-6 mb-3">
                <a href="http://capstone.innaweb.tech">

                    <div class="img-overlay mb-3">
                        <figcaption class="h5 font-weight-normal">
                            <h4>An ecommerce website built with PHP</h4>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">HTML/CSS</li>
                                <li class="list-group-item">MySQL, CRUD implementation</li>
                                <li class="list-group-item">PHP</li>
                                <li class="list-group-item">Admin Panel</li>
                                <li class="list-group-item">Shopping cart</li>
                                <li class="list-group-item">User Authentication, Registration</li>

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
    </div>

    @endsection
