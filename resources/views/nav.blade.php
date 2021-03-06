<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand rocksalt" href="{{ route('home') }}">Michelle Kesel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href=" {{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('bio') }}">Biography</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('portfolio') }}">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('resume') }}">Resume</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('songs') }}">Songs</a>
            </li>
        </ul>
    </div>
</nav>
