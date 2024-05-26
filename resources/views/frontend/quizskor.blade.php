<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Simligh Math</title>
    <style>
      html {
        background-image: url("assets/background/44.png");
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
        width: 45%;
        font-weight: bold;
        font-size: 18px;
        border: 0;
      }
    </style>
    <link rel="stylesheet" href="assets/style.css" />
  </head>
  <body>
    <div class="appcontainer">
      <div style="margin: 55% 0 0 30%; font-size: 120px; color: blue;">
      {{ $quiz->getAttribute('nilai') }}
      <!-- 100 -->
      </div>
      <a href="{{ route('kuncijawaban') }}">
        <div class="container" style="margin: 40% 0 0 20%;">
          <img src="assets/icon/3.png" width="75%" />
          <input readonly type="text" style="bottom: 40%; left: 15%" placeholder="Kunci Jawaban" />
        </div>
      </a>
    </div>
  </body>
</html>
