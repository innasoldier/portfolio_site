<!-- main navigation -->
<nav class="navbar navbar-light main-navigation sticky-top">
    <a class="{{ Request::is('/') ? "active navbar-brand" : "navbar-brand" }}" href="/">
        Inna Soldatkina
    </a>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="{{ Request::is('about') ? "active nav-link" : "nav-link" }}" href="/about">About Me</a>
        </li>
        <li class="nav-item">
            <a class="{{ Request::is('projects') ? "active nav-link" : "nav-link" }}" href="/projects">Projects</a>
        </li>
        <li class="nav-item">
            <a class="{{ Request::is('contact') ? "active nav-link" : "nav-link" }}" href="/contact">Contact</a>
        </li>
    </ul>
</nav>
<!-- end of main navigation -->
