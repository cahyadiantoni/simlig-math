<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Simligh Math</title>
    <style>
      html {
        background-image: url("assets/background/36.png");
      }
    </style>
    <link rel="stylesheet" href="assets/style.css" />
  </head>
  <body>
    <div class="appcontainer" style="color: gold; font-size: 14px;">
    <form method="POST" id="storeLatihanc2" action="{{ route('storeLatihanc') }}">
    @csrf
      <div style="margin: 33% 0 0 12%;">
        Mula mula nyatakan informasi yang <br>
        didapatkan menjadi variabel !!<br>
      </div>
      <div style="margin: 5% 0 0 12%;">
        <input type="text" value="{{ old('1', optional($latihanCampuran)->getAttribute('1')) }}" name="1" style="border: 0; width: 40%;" /> =
        <input type="text" value="{{ old('2', optional($latihanCampuran)->getAttribute('2')) }}" name="2" style="border: 0; width: 15%;" /> 
      </div>
      <div style="margin: 5% 0 0 12%;">
        <input type="text" value="{{ old('3', optional($latihanCampuran)->getAttribute('3')) }}" name="3" style="border: 0; width: 40%;" /> =
        <input type="text" value="{{ old('4', optional($latihanCampuran)->getAttribute('4')) }}" name="4" style="border: 0; width: 15%;" /> 
      </div>
      <div style="margin: 5% 0 0 12%;">
        <input type="text" value="{{ old('5', optional($latihanCampuran)->getAttribute('5')) }}" name="5" style="border: 0; width: 40%;" /> =
        <input type="text" value="{{ old('6', optional($latihanCampuran)->getAttribute('6')) }}" name="6" style="border: 0; width: 15%;" /> 
      </div>
      
      <div style="margin: 10% 0 0 12%;">
        Tuliskan informasi yang didapatkan <br>
        menjadi persamaan !!
      </div>

      <div style="margin: 5% 0 0 12%;">
        <input type="text" value="{{ old('7', optional($latihanCampuran)->getAttribute('7')) }}" name="7" style="border: 0; width: 40%;" />
        .... Persamaan 1
      </div>
      <div style="margin: 5% 0 0 12%;">
        <input type="text" value="{{ old('8', optional($latihanCampuran)->getAttribute('8')) }}" name="8" style="border: 0; width: 40%;" />
        .... Persamaan 2
      </div>
      <div style="margin: 5% 0 0 12%;">
        <input type="text" value="{{ old('9', optional($latihanCampuran)->getAttribute('9')) }}" name="9" style="border: 0; width: 40%;" />
        .... Persamaan 3
      </div>

      <div style="margin: 80% 0 0 11%">
        <a href="#">
          <img src="assets/icon/11.png" width="18%" onclick="submitForm('1')" style="margin-right: 50%" />
        </a>
        <a href="#">
          <img src="assets/icon/12.png" width="18%" onclick="submitForm('3')" />
        </a>
      </div>
      </form>
    </div>
  </body>
</html>
<script>
    function submitForm(redirect) {
        var form = document.getElementById('storeLatihanc2');

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
