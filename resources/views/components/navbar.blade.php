<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home">Universitas Terbuka Yogyakarta</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/auth/login">Login</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Tutor & Mahasiswa
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/nilai">Nilai</a></li>
                        <li><a class="dropdown-item" href="/tutor">Tutor</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/auth/register">Daftar</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>

                <li>
                <li class="nav-item">
                    <form action="/auth/logout" method="post">
                        @csrf
                        <x-button type="submit" color="outline-warning" text="Log Out" />
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
