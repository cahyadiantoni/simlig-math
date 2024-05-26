<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Simligh Math</title>
    <style>
      html {
        background-image: url("assets/background/31.png");
      }
    </style>
    <link rel="stylesheet" href="assets/style.css" />
  </head>
  <body>
    <div class="appcontainer" style="color: gold; font-size: 14px;">
    <form method="POST" id="storeLatihans3" action="{{ route('storeLatihans') }}">
    @csrf
      <div style="margin: 33% 0 0 12%;">
        3) Substitusikan 
        <input type="text" value="{{ old('29', optional($latihanSubstitusi)->getAttribute('29')) }}" name="29" style="border: 0; width: 8%;" /> = 
        <input type="text" value="{{ old('30', optional($latihanSubstitusi)->getAttribute('30')) }}" name="30" style="border: 0; width: 12%;" /> (hasil dari <br>
        langkah ke-2) ke dalam persamaan 3 <br>
        2y + z  = 21.000 <br>
      </div>
      <div style="margin: 1% 0 0 12%;">
        2( <input type="text" value="{{ old('31', optional($latihanSubstitusi)->getAttribute('31')) }}" name="31" style="border: 0; width: 10%;" /> ) + z = 21.000 <br>
      </div>
      <div style="margin: 1% 0 0 12%;">
        <input type="text" value="{{ old('32', optional($latihanSubstitusi)->getAttribute('32')) }}" name="32" style="border: 0; width: 18%;" /> + z = 21.000 <br>
      </div>
      <div style="margin: 1% 0 0 12%;">
        z = 21.000 - <input type="text" value="{{ old('33', optional($latihanSubstitusi)->getAttribute('33')) }}" name="33" style="border: 0; width: 18%;" />
      </div>
      <div style="margin: 1% 0 0 12%;">
        z = <input type="text" value="{{ old('34', optional($latihanSubstitusi)->getAttribute('34')) }}" name="34" style="border: 0; width: 18%;" />
      </div>

      <div style="margin: 5% 0 0 12%;">
        4) Substitusikan y = 
        <input type="text" value="{{ old('35', optional($latihanSubstitusi)->getAttribute('35')) }}" name="35" style="border: 0; width: 10%;" /> dan z = 
        <input type="text" value="{{ old('36', optional($latihanSubstitusi)->getAttribute('36')) }}" name="36" style="border: 0; width: 10%;" /> <br>
        ke dalam persamaan 1 <br>
        x + y + z  = 26.000 <br>
      </div>
      <div style="margin: 1% 0 0 12%;">
        x + <input type="text" value="{{ old('37', optional($latihanSubstitusi)->getAttribute('37')) }}" name="37" style="border: 0; width: 10%;" /> + 
        <input type="text" value="{{ old('38', optional($latihanSubstitusi)->getAttribute('38')) }}" name="38" style="border: 0; width: 10%;" /> = 26.000 <br>
      </div>
      <div style="margin: 1% 0 0 12%;">
        x = 26.000 - <input type="text" value="{{ old('39', optional($latihanSubstitusi)->getAttribute('39')) }}" name="39" style="border: 0; width: 18%;" />
      </div>
      <div style="margin: 1% 0 0 12%;">
        x = <input type="text" value="{{ old('40', optional($latihanSubstitusi)->getAttribute('40')) }}" name="40" style="border: 0; width: 18%;" />
      </div>
      
      
      <div style="margin: 5% 0 0 12%;">
        5) Maka untuk harga <br>
        1. Kentang goreng (x) =  
        <input type="text" value="{{ old('41', optional($latihanSubstitusi)->getAttribute('41')) }}" name="41" style="border: 0; width: 20%;" />
      </div>
      <div style="margin: 1% 0 0 12%;">
        2. Nugget (y) =  
        <input type="text" value="{{ old('42', optional($latihanSubstitusi)->getAttribute('42')) }}" name="42" style="border: 0; width: 20%;" />
      </div>
      <div style="margin: 1% 0 0 12%;">
        2. Burger (y) =  
        <input type="text" value="{{ old('43', optional($latihanSubstitusi)->getAttribute('43')) }}" name="43" style="border: 0; width: 20%;" />
      </div>

      <div style="margin: 5% 0 0 12%;">
        Karena uang Nadin Rp. 14.000,00, maka <br>
        Nadin dapat membeli 
        <input type="text" value="{{ old('44', optional($latihanSubstitusi)->getAttribute('44')) }}" name="44" style="border: 0; width: 24%;" /> dan <br>
        <input type="text" value="{{ old('45', optional($latihanSubstitusi)->getAttribute('45')) }}" name="45" style="border: 0; width: 24%;" /> 
      </div>

      <div style="margin: 48% 0 0 11%">
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
        var form = document.getElementById('storeLatihans3');

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
