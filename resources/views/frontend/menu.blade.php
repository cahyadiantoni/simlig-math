<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Simligh Math</title>
    <style>
      html {
        background-image: url("assets/background/3.png");
      }
    </style>
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

  </head>
  <body>
    <div class="appcontainer">
      <div style="margin: 3% 0 0 3%">
        <a href="{{ route('profile') }}">
          <img src="assets/icon/4.png" width="15%" />
        </a>
      </div>
      <div style="margin: 3% 0 0 3%">
        <a href="{{ route('petunjuk') }}">
          <img src="assets/icon/5.png" width="15%" />
        </a>
      </div>

      <div style="margin: 50% 0 0 15%">
        <a href="{{ route('cp') }}">
          <img src="assets/icon/6.png" width="30%" style="margin-right: 20%" />
        </a>
        <a href="{{ route('materi') }}">
          <img src="assets/icon/7.png" width="30%" />
        </a>
      </div>

      <div style="margin: 5% 0 0 10%">
        <a href="{{ route('video') }}">
          <img src="assets/icon/8.png" width="45%" style="margin-right: 8%" />
        </a>
        <a href="{{ route('evaluasi') }}">
          <img src="assets/icon/9.png" width="30%" style="margin-bottom: 10%;"/>
        </a>
      </div>

      <div style="margin: 25% 0 0 45%">
        <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search" id="logout-form">
            @csrf
            @method('DELETE')
            <a href="#" class="dropdown-item" onclick="confirmLogout(event)">
                <img src="assets/icon/logout.png" width="20%" style="margin-bottom: 10%;"/>
            </a>
        </form>
        <a href="{{ route('evaluasi') }}">
        </a>
      </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
  </script>
  </body>
</html>
