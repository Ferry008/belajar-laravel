<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2eed;">
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
                    <a class="nav-link" href="/about">About</a>
                </li>
                @auth
                    {{-- Only Admin & Tutor --}}
                    @canany(['isTutor', 'isAdmin'])
                        <li clas="nav-item">
                            <a class=nav-link {{ Request::is('tutor*') ? 'active' : '' }} href="/tutor">Tutor</a>
                        </li>
                    @endcanany
                    {{-- Only Admin & Mahasiswa --}}
                    @canany(['isMahasiswa', 'isAdmin'])
                        <li clas="nav-item">
                            <a class=nav-link {{ Request::is('mahasiswa*') ? 'active' : '' }} href="/nilai">Mahasiswa</a>
                        </li>
                    @endcanany
                @endauth
            </ul>

            @auth
                {{-- <li class="nav-item">
                        "Selamat datang, {{ auth()->user()->name }}"
                    </li> --}}
                {{-- Logout --}}
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle dropdown-toggle-split" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        "Selamat datang, {{ auth()->user()->name }}"
                    </button>
                    <ul class="dropdown-menu">
                        {{-- <li><a class="dropdown-item" href="/nilai">Nilai</a></li>
                        <li><a class="dropdown-item" href="/tutor">Tutor</a></li>
                        <li> --}}
                            <hr class="dropdown-divider">
                            <form action="/auth/logout" method="post">
                                @csrf
                                <x-button type="submit" color="outline-primary" text="Log Out" />
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                {{-- Login --}}
                <div class="new-item">
                    <a class="btn btn-primary" href="/auth/login">Login</a>
                </div>

            @endauth


        </div>
    </div>
</nav>
