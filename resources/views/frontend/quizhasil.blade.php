<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Simligh Math</title>
    <style>
      html {
        background-image: url("assets/background/43.png");
      }
      .container {
        position: relative;
      }

      .container img {
        display: block;
      }

      .container input[type="text"] {
        position: absolute;
        z-index: 1;
        width: 30%;
        font-weight: bold;
        font-size: 18px;
        border: 0;
      }
    </style>
    <link rel="stylesheet" href="assets/style.css" />
  </head>
  <body>
    <div class="appcontainer">
      <a href="{{ route('quizskor') }}">
        <div class="container" style="margin: 165% 0 0 23%">
          <img src="assets/icon/3.png" width="75%" />
          <input readonly type="text" style="bottom: 40%; left: 23%" placeholder="Ayo Lihat" />
        </div>
      </a>
    </div>
  </body>
</html>
