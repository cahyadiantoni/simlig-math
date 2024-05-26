<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Simligh Math</title>
    <style>
      html {
        background-image: url("assets/background/26.png");
      }
    </style>
    <link rel="stylesheet" href="assets/style.css" />
  </head>
  <body>
    <div class="appcontainer">
      <div style="margin: 80% 0 0 35%">
        <a href="{{ route('latihanmenu') }}">
          <img src="assets/icon/28.png" width="45%" />
        </a>
      </div>
      <div style="margin: 10% 0 0 35%">
        <a href="{{ route('quiz1') }}">
          <img src="assets/icon/29.png" width="40%" />
        </a>
      </div>
      <div style="margin: 48% 0 0 8%">
        <a href="{{ route('video') }}">
          <img src="assets/icon/11.png" width="18%" style="margin-right: 17%" />
        </a>
        <a href="{{ route('home') }}">
          <img src="assets/icon/10.png" width="18%" style="margin-right: 17%" />
        </a>
        <a href="{{ route('latihanmenu') }}">
          <img src="assets/icon/12.png" width="18%" />
        </a>
      </div>
    </div>
  </body>
</html>
