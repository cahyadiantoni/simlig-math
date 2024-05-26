<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Simligh Math</title>
    <style>
      html {
        background-image: url("assets/background/33.png");
      }
    </style>
    <link rel="stylesheet" href="assets/style.css" />
  </head>
  <body>
    <div class="appcontainer" style="color: gold; font-size: 14px;">
    <form method="POST" id="storeLatihane3" action="{{ route('storeLatihane') }}">
    @csrf
      <div style="margin: 35% 0 0 12%;">
        $) Maka dapat dipastikan bahwa <br>
        sepatu dari 
      </div>
      <div style="margin: 1% 0 0 12%;">
        mesin A (x) = 
        <input type="text" value="{{ old('36', optional($latihanEliminasi)->getAttribute('36')) }}" name="36" style="border: 0; width: 10%;" /> ,
      </div>
      <div style="margin: 1% 0 0 12%;">
        mesin B (y) = 
        <input type="text" value="{{ old('37', optional($latihanEliminasi)->getAttribute('37')) }}" name="37" style="border: 0; width: 10%;" /> , dan
      </div>
      <div style="margin: 1% 0 0 12%;">
        mesin C (z) = 
        <input type="text" value="{{ old('38', optional($latihanEliminasi)->getAttribute('38')) }}" name="38" style="border: 0; width: 10%;" />
      </div>

      <div style="margin: 142% 0 0 11%">
        <a href="#">
          <img src="assets/icon/11.png" width="18%" onclick="submitForm('2')" style="margin-right: 50%" />
        </a>
        <a href="#">
          <img src="assets/icon/12.png" width="18%" onclick="submitForm('4')" />
        </a>
      </div>
      </form>
    </div>
  </body>
</html>

<script>
    function submitForm(redirect) {
        var form = document.getElementById('storeLatihane3');

        // Tambahkan input hidden untuk mengirimkan parameter
        if (redirect) {
            var input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'redirect';
            input.value = redirect;
            form.appendChild(input);
        }

        form.submit();
    }
</script>
