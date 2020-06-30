@extends('main')

@section('content')
    <!-- Hero -->
    <div class="container py-5 col-lg-10">
        <h1 class="display-2 pb-2 text-focus-in">Meet Inna</h1>
        <hr class="border-3 border-white my-4 ml-0 text-left w-25" role="presentation">
        <div class="row">
            <div class="col-lg-8">
                <p class="font-serif lead mb-4 text-secondary">A talented and creative developer with a passion in programming.</p>
                <p class="font-serif lead mb-4 text-secondary">I have developed     programming competencies through hands-on experience in
                    developing websites and applications at the University of Winnipeg using such languages as HTML,
                    JavaScript, PHP and Python, and I am eager to integrate my talents and strengths into a supportive workplace.</p>
            </div>
        </div>
    </div>


    <!-- Skills -->
    <div class="bg-white text-black">
        <div class="container py-6 col-md-8">
            <div class="sectiontitle">
                <h2 class="text-center mb-5">Skills & Strengths</h2>

            </div>
            <div class="row pb-5">
                <div class="col-md">
                    <blockquote class="text-center mb-5 mb-sm-0">
                        <i class="fas fa-paint-brush fa-7x"></i><br>
                        <span class="small text-muted text-uppercase">Photoshop + Adobe Animate</span>
                        <p class="quote text-muted mt-3 mb-0">A confident user of Photoshop, Illustrator.
                            Good at creating graphics and animations with Adobe Animate.</p>
                    </blockquote>
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
                        <i class="fab fa-linux fa-7x"></i><br>
                        <span class="small text-muted text-uppercase">Linux/Unix/Windows OS</span>
                        <p class="quote text-muted mt-3 mb-0">Experience with different operating systems. Fundamentals in server administration and management. </p>
                    </blockquote>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <blockquote class="text-center mb-5 mb-sm-0">
                        <i class="fas fa-database fa-7x"></i><br>
                        <span class="small text-muted text-uppercase">MySQL, SQLite</span>
                        <p class="quote text-muted mt-3 mb-0">Experience in working with MySQL and SQLite database systems. SQL language, understanding of data modeling and normalization.</p>
                    </blockquote>
                </div>
                <div class="col-md">
                    <blockquote class="text-center mb-5 mb-md-0">
                        <i class="fab fa-react fa-7x"></i><br>
                        <span class="small text-muted text-uppercase">JavaScript + React</span>
                        <p class="quote text-muted mt-3 mb-0">Core knowledge of the Vanilla JavaScript, jQuery, VueJS. Actively learning React and Redux while developing a social network app.</p>
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

        <div class="container py-6 col-md-8">

            <div id="workexperience" class="sectionClass">
                <div class="row ">
                    <div class="sectiontitle">
                        <h2 class="text-center">Education & Work</h2>
                        <span class="headerLine"></span>
                    </div>
                    <div class="fullWidth eight columns">
                        <ul class="cbp_tmtimeline">
                            <li>
                                <div class="cbp_tmicon cbp_tmicon-phone">
                                    <i class="fa-university fa-4x faPra"></i>
                                </div>
                                <div class="cbp_tmlabel wow fadeInRight animated">
                                    <h3>Web Development Diploma</h3>
                                    <div class="date">
                                        <i class="fa fa-calendar"></i>Sept 2019 - Aug 2020
                                    </div>
                                    <h4><i class="fa fa-flag"></i>The University of Winnipeg, MB</h4>
                                    <p class="projectParagraph">Developed hands-on skills in web development applications and programming languages
                                        such as HTML, CSS, XML, JavaScript, PHP, and Java;</p>
                                    <p class="projectParagraph">Gained an understanding of security problems in order to install, set-up, and secure a Web server.</p>
                                </div>
                            </li>
                            <li>
                                <div class="cbp_tmicon cbp_tmicon-screen">
                                    <i class="faPra fa-briefcase"></i>
                                </div>
                                <div class="cbp_tmlabel wow fadeInRight animated">
                                    <h3>Customer Support Representative</h3>
                                    <h4><i class="fa fa-flag"></i>Namecheap Inc, Kharkiv, Ukraine</h4>
                                    <div class="date"><i class="fa fa-calendar"></i>Oct 2016 - Jun 2017</div>
                                    <p class="projectParagraph">Identified and resolved customer issues regarding domains, hosting and email accounts. Supported clients with debugging, hosting account maintenance and migration, software management, website optimization.
                                    </p>
                                    <p class="projectParagraph">Applied strong troubleshooting and communication skills to solve technical issues.</p>
                                </div>
                            </li>
                            <li>
                                <div class="cbp_tmicon cbp_tmicon-mail">
                                    <i class="fa-university fa-4x faPra"></i>
                                </div>
                                <div class="cbp_tmlabel wow fadeInRight animated">
                                    <h3>Bachelor of Applied Linguistics</h3>
                                    <h4><i class="fa fa-flag"></i>V. N. Karazin Kharkiv National University, Ukraine</h4>
                                    <div class="date"><i class="fa fa-calendar"></i>November 2009 - June 2012</div>
                                    <p class="projectParagraph">
                                        Gained knowledge and skills in the following areas:
                                        <br> - Programming
                                        <br> - Computer Science
                                        <br> - Machine translation
                                        <br> - English Language
                                        <br> - German Language (B2)

                                    </p>

                                </div>
                            </li>
                        </ul>
                    </div>
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
