<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href=""><img src="{{ asset('assets/images/logo.png') }}" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href=""><img src="{{ asset('assets/images/logo-mini.png') }}" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <!-- Dropdown menu for user profile -->
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="nav-profile-img">
                        <img src="{{ asset('assets/images/user.png') }}" alt="image">
                        <span class="availability-status online"></span>
                    </div>
                    <div class="nav-profile-text">
                        <p class="mb-1 text-black">Administrator</p>
                    </div>
                </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                    <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search" id="logout-form">
                        @csrf
                        @method('DELETE')
                        <a href="#" class="dropdown-item" onclick="confirmLogout(event)">
                            <i class="mdi mdi-logout me-2 text-primary"></i> Logout
                        </a>
                    </form>
                </div>
            </li>
            <!-- Logout button -->
            <li class="nav-item nav-logout d-none d-lg-block" onclick="confirmLogout(event)">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-power"></i>
                </a>
            </li>
        </ul>
        <!-- End of Dropdown menu for user profile -->
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>

<!-- SweetAlert2 script -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Custom script -->
<script>
    // Function to confirm logout
    function confirmLogout(event) {
        event.preventDefault();
        Swal.fire({
            title: 'Logout',
            text: 'Are you sure you want to logout?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, logout'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('logout-form').submit();
            }
        });
    }

    // Script to show success message
    document.addEventListener('DOMContentLoaded', function() {
        let successMessage = '{{ Session::get('success') }}';
        if (successMessage) {
            Swal.fire({
                title: 'Success',
                text: successMessage,
                icon: 'success'
            });
        }
    });
</script>
