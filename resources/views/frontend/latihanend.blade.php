<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Simligh Math</title>
    <style>
      html {
        background-image: url("assets/background/39.png");
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

      textarea {
            margin: 140% 0 0 19%;
            width: 60%;
            height: 10%;
            border: 5px solid blue; 
            padding: 5px;
            border-radius: 20px;
        }
    </style>
    <link rel="stylesheet" href="assets/style.css" />
  </head>
  <body>
    <div class="appcontainer">
    <form method="POST" id="storeLatihanend" action="{{ route('storeLatihanend') }}">
    @csrf
      <?php if ($latihanEnd !== null && $latihanEnd->getAttribute('pendapat') !== null) {$test = $latihanEnd->getAttribute('pendapat');} else {$test = '';}
      ?>
      <textarea name="pendapat" id="pendapat" placeholder="Tuliskan Pendapatmu di sini">{{ $test }}</textarea>
      <a href="#">
        <div class="container" style="margin: 1% 0 0 23%;" onclick="submitForm()">
          <img src="assets/icon/3.png" width="75%" />
          <input readonly type="text" style="bottom: 40%; left: 8%" value="Kirim Pendapatmu" />
        </div>
      </a>
    </form>
    </div>
  </body>
</html>

<script>
    function submitForm() {
        var form = document.getElementById('storeLatihanend');
        form.submit();
    }
</script>
