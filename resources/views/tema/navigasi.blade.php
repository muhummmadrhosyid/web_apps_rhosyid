<nav class="navbar navbar-expand-lg  navbar-light bg-light ">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('/storage/gambar/logo.png') }}" width="45" height="45"> Teknik Informatika
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" datatarget="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" ariaexpanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/home') }}">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/konten') }}">Konten</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ url('/logout') }}" tabindex="-1" ariadisabled="true">Logout</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm2" type="search" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm0" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>