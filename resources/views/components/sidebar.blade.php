<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{ asset('assets/images/user.png') }}" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">Administrator</span>
                    <span class="text-secondary text-small">Admin Website</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('user.data') }}">
                <span class="menu-title">User</span>
                <i class="mdi mdi-cloud-upload menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('quiz.data') }}">
                <span class="menu-title">Quiz</span>
                <i class="mdi mdi-cloud-upload menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('pendapat.data') }}">
                <span class="menu-title">Pendapat</span>
                <i class="mdi mdi-cloud-upload menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('latihan_substitusi.data') }}">
                <span class="menu-title">Latihan Substitusi</span>
                <i class="mdi mdi-cloud-upload menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('latihan_eliminasi.data') }}">
                <span class="menu-title">Latihan Eliminasi</span>
                <i class="mdi mdi-cloud-upload menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('latihan_campuran.data') }}">
                <span class="menu-title">Latihan Campuran</span>
                <i class="mdi mdi-cloud-upload menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>
