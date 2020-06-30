<!-- main navigation -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="{{ Request::is('/') ? "active navbar-brand" : "navbar-brand" }}" href="/">Inna Soldatkina</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="{{ Request::is('about') ? "active nav-link": "nav-link" }}" href="/about">About Me</a>
            </li>
            <li class="nav-item">
                <a class="{{ Request::is('projects') ? "active nav-link" : "nav-link" }}" href="/projects">Projects</a>
            </li>
            <li class="nav-item">
                <a class="{{ Request::is('contact') ? "active nav-link" : "nav-link" }}" href="/contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>
<!-- end of main navigation -->
