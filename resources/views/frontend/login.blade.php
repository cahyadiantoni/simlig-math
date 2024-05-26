<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Simligh Math</title>
    <style>
      html {
        background-image: url("assets/background/2.png");
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
        width: 50%;
        font-weight: bold;
        font-size: 18px;
        border: 0;
      }
    </style>
    <link rel="stylesheet" href="assets/style.css" />
  </head>
  <body>
    <div class="appcontainer">
      <form id="loginForm" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="container" style="margin: 85% 0 0 23%">
          <img src="assets/icon/2.png" width="75%" />
          <input type="text" name="email" style="bottom: 40%; left: 15%" />
        </div>
        
        <div class="container" style="margin: 3% 0 0 23%">
          <img src="assets/icon/3.png" width="75%" />
          <input type="text" name="password" style="bottom: 40%; left: 7%" />
        </div>
        
        <div style="margin: 32% 0 0 40%;">
          <a href="#" onclick="document.getElementById('loginForm').submit();">
            <img src="assets/icon/1.png" width="35%"/>
          </a>
        </div>
        
      </form>

    </div>
  </body>
</html>
