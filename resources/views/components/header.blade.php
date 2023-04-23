<!-- Navbar -->
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"
         style="background-color: rgba(0, 0, 0, 0.8)!important;">
        <div class="container-fluid">
            <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <i class="fas fa-bars text-light"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white " aria-current="page" href="/#Main">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white ms-3 me-3" href="/#Base">База знаний</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white  me-3" href="/#Discord">Дискорд</a>
                    </li>
                    <li class="nav-item text-white">
                        <a class="nav-link text-white me-2" href="/#Donation">Поддержка</a>
                    </li>
                    <li class="nav-item p-0 fs-5">
                        <div class="dropdown text-center"
                             style="background-color: rgba(0, 0, 0, 0)!important;">
                            <button
                                class="btn btn-black text-light dropdown-toggle"
                                type="button"
                                id="dropdownMenuButton"
                                data-mdb-toggle="dropdown"
                                aria-expanded="false"


                            >
                                <span class="text-lowercase"><span class="text-uppercase">Д</span>ля игроков</span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="installation">Как установить?</a></li>
                                <li><a class="dropdown-item" href="builds.html">Билды</a></li>
                                <li><a class="dropdown-item" href="guides.html">Гайды</a></li>
                                <li><a class="dropdown-item" href="{{route('calc')}}">Калькулятор LP</a></li>
                                <li><a class="dropdown-item" href="database">База знаний</a></li>
                                <li><a class="dropdown-item" href="{{route('parse')}}">Parse</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Right elements -->
            <div class="d-flex align-items-center me-3">

                <div class="dropdown">
                    <a
                        class="dropdown-toggle d-flex align-items-center hidden-arrow"
                        href="#"
                        id="navbarDropdownMenuAvatar"
                        role="button"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <button class="btn btn-primary ">
                            {{Auth::user()->name ?? 'Профиль'}}
                        </button>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                        @if(Auth::guest())
                            <li>
                                <a class="dropdown-item" href="{{route('login')}}">Авторизация</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{route('register')}}">Регистрация</a>
                            </li>
                        @elseif (Auth::user()->is_admin)
                            <li>
                                <a class="dropdown-item" href="{{route('dashboard')}}">Админ панель</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}">Выйти</a>
                            </li>
                        @elseif (Auth::user())
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}">Выйти</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <!-- Right elements -->
        </div>
    </nav>
</header>
