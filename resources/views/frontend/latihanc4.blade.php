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
    <form method="POST" id="storeLatihanc4" action="{{ route('storeLatihanc') }}">
    @csrf
      <div style="margin: 33% 0 0 9%;">
        Substitusikan hasil yang didapatkan<br>
        ke persamaan 1 dan 3 !!<br>
      </div>

      <div style="margin: 1% 0 0 9%;">
        <input type="text" value="{{ old('54', optional($latihanCampuran)->getAttribute('54')) }}" name="54" style="border: 0; width: 10%;" /> = 
        <input type="text" value="{{ old('55', optional($latihanCampuran)->getAttribute('55')) }}" name="55" style="border: 0; width: 10%;" /> dan
        <input type="text" value="{{ old('56', optional($latihanCampuran)->getAttribute('56')) }}" name="56" style="border: 0; width: 10%;" /> = 
        <input type="text" value="{{ old('57', optional($latihanCampuran)->getAttribute('57')) }}" name="57" style="border: 0; width: 10%;" /> , maka
      </div>
      <div style="margin: 1% 0 0 9%;">
        <input type="text" value="{{ old('58', optional($latihanCampuran)->getAttribute('58')) }}" name="58" style="border: 0; width: 10%;" /> +
        <input type="text" value="{{ old('59', optional($latihanCampuran)->getAttribute('59')) }}" name="59" style="border: 0; width: 10%;" /> +
        <input type="text" value="{{ old('60', optional($latihanCampuran)->getAttribute('60')) }}" name="60" style="border: 0; width: 10%;" /> = 
        <input type="text" value="{{ old('61', optional($latihanCampuran)->getAttribute('61')) }}" name="61" style="border: 0; width: 10%;" /> 
      </div>
      <div style="margin: 1% 0 0 9%;">
        <input type="text" value="{{ old('62', optional($latihanCampuran)->getAttribute('62')) }}" name="62" style="border: 0; width: 10%;" /> +
        <input type="text" value="{{ old('63', optional($latihanCampuran)->getAttribute('63')) }}" name="63" style="border: 0; width: 10%;" /> +
        <input type="text" value="{{ old('64', optional($latihanCampuran)->getAttribute('64')) }}" name="64" style="border: 0; width: 10%;" /> = 
        <input type="text" value="{{ old('65', optional($latihanCampuran)->getAttribute('65')) }}" name="65" style="border: 0; width: 10%;" /> 
      </div>
      <div style="margin: 1% 0 0 38%;">
        <input type="text" value="{{ old('66', optional($latihanCampuran)->getAttribute('66')) }}" name="66" style="border: 0; width: 14%;" /> = 
        <input type="text" value="{{ old('67', optional($latihanCampuran)->getAttribute('67')) }}" name="67" style="border: 0; width: 14%;" /> 
      </div>
      <div style="margin: 1% 0 0 38%;">
        <input type="text" value="{{ old('68', optional($latihanCampuran)->getAttribute('68')) }}" name="68" style="border: 0; width: 14%;" /> = 
        <input type="text" value="{{ old('69', optional($latihanCampuran)->getAttribute('69')) }}" name="69" style="border: 0; width: 14%;" /> 
      </div>
      
      <div style="margin: 5% 0 0 9%;">
        Maka, hasil yang diperoleh dari<br>
        penyelesaian tersebut adalah<br>
      </div>
      <div style="margin: 1% 0 0 9%;">
        <li>
          Buah Mangga = 
          <input type="text" value="{{ old('70', optional($latihanCampuran)->getAttribute('70')) }}" name="70" style="border: 0; width: 14%;" /> 
        </li>
      </div>
      <div style="margin: 1% 0 0 9%;">
        <li>
          Buah Apel = 
          <input type="text" value="{{ old('71', optional($latihanCampuran)->getAttribute('71')) }}" name="71" style="border: 0; width: 14%;" /> 
        </li>
      </div>
      <div style="margin: 1% 0 0 9%;">
        <li>
          Buah Pisang = 
          <input type="text" value="{{ old('72', optional($latihanCampuran)->getAttribute('72')) }}" name="72" style="border: 0; width: 14%;" /> 
        </li>
      </div>
      
      
      <div style="margin: 95% 0 0 11%">
        <a href="#">
          <img src="assets/icon/11.png" width="18%" onclick="submitForm('3')" style="margin-right: 50%" />
        </a>
        <a href="#">
          <img src="assets/icon/12.png" width="18%" onclick="submitForm('5')" />
        </a>
      </div>
      </form>
    </div>
  </body>
</html>
<script>
    function submitForm(redirect) {
        var form = document.getElementById('storeLatihanc4');

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
