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
    <div class="appcontainer" style="color: gold; font-size: 14px">
    <form method="POST" id="storeLatihanc3" action="{{ route('storeLatihanc') }}">
    @csrf
      <div style="margin: 33% 0 0 9%">
        Substitusikan persamaan 2 ke persamaan 1<br />
        dan persamaan 3 !!<br />
      </div>

      <div style="margin: 5% 0 0 9%">
        Substitusikan persamaan
        <input type="text" value="{{ old('10', optional($latihanCampuran)->getAttribute('10')) }}" name="10" style="border: 0; width: 6%" /> = 2 <input type="text" value="{{ old('11', optional($latihanCampuran)->getAttribute('11')) }}" name="11" style="border: 0; width: 6%" /> ke <br />
        persamaan 1 sehingga diperoleh.
      </div>

      <div style="margin: 1% 0 0 9%">
        persamaan 1 :
        <input type="text" value="{{ old('12', optional($latihanCampuran)->getAttribute('12')) }}" name="12" style="border: 0; width: 6%" /> + <input type="text" value="{{ old('13', optional($latihanCampuran)->getAttribute('13')) }}" name="13" style="border: 0; width: 6%" /> + <input type="text" value="{{ old('14', optional($latihanCampuran)->getAttribute('14')) }}" name="14" style="border: 0; width: 6%" /> = 45
      </div>
      <div style="margin: 1% 0 0 31%">( <input type="text" value="{{ old('15', optional($latihanCampuran)->getAttribute('15')) }}" name="15" style="border: 0; width: 8%" /> ) + <input type="text" value="{{ old('16', optional($latihanCampuran)->getAttribute('16')) }}" name="16" style="border: 0; width: 8%" /> + <input type="text" value="{{ old('17', optional($latihanCampuran)->getAttribute('17')) }}" name="17" style="border: 0; width: 8%" /> = 45</div>
      <div style="margin: 1% 0 0 46%"><input type="text" value="{{ old('18', optional($latihanCampuran)->getAttribute('18')) }}" name="18" style="border: 0; width: 11%" /> + <input type="text" value="{{ old('19', optional($latihanCampuran)->getAttribute('19')) }}" name="19" style="border: 0; width: 11%" /> = 45 ....Pers 4</div>

      <div style="margin: 1% 0 0 9%">
        Substitusikan persamaan
        <input type="text" value="{{ old('20', optional($latihanCampuran)->getAttribute('20')) }}" name="20" style="border: 0; width: 6%" /> = 2 <input type="text" value="{{ old('21', optional($latihanCampuran)->getAttribute('21')) }}" name="21" style="border: 0; width: 6%" /> ke <br />
        persamaan 3 sehingga diperoleh.
      </div>

      <div style="margin: 1% 0 0 9%">
        pers 3 :
        <input type="text" value="{{ old('22', optional($latihanCampuran)->getAttribute('22')) }}" name="22" style="border: 0; width: 6%" /> + <input type="text" value="{{ old('23', optional($latihanCampuran)->getAttribute('23')) }}" name="23" style="border: 0; width: 6%" /> + <input type="text" value="{{ old('24', optional($latihanCampuran)->getAttribute('24')) }}" name="24" style="border: 0; width: 6%" /> = 700.000
      </div>
      <div style="margin: 1% 0 0 18%">( <input type="text" value="{{ old('25', optional($latihanCampuran)->getAttribute('25')) }}" name="25" style="border: 0; width: 7%" /> ) + <input type="text" value="{{ old('26', optional($latihanCampuran)->getAttribute('26')) }}" name="26" style="border: 0; width: 7%" /> + <input type="text" value="{{ old('27', optional($latihanCampuran)->getAttribute('27')) }}" name="27" style="border: 0; width: 7%" /> = 700.000</div>
      <div style="margin: 1% 0 0 33%"><input type="text" value="{{ old('28', optional($latihanCampuran)->getAttribute('28')) }}" name="28" style="border: 0; width: 9%" /> + <input type="text" value="{{ old('29', optional($latihanCampuran)->getAttribute('29')) }}" name="29" style="border: 0; width: 9%" /> = 700.000 ....Pers 5</div>

      <div style="margin: 1% 0 0 9%">
        Gunakan metode eliminasi untuk persamaan <br />
        4 dan 5
      </div>

      <div style="margin: 1% 0 0 9%">
        persamaan 4 :
        <input type="text" value="{{ old('30', optional($latihanCampuran)->getAttribute('30')) }}" name="30" style="border: 0; width: 10%" /> + <input type="text" value="{{ old('31', optional($latihanCampuran)->getAttribute('31')) }}" name="31" style="border: 0; width: 10%" /> = 45
        <span style="margin-left: 10%"> | x <input type="text" value="{{ old('32', optional($latihanCampuran)->getAttribute('32')) }}" name="32" style="border: 0; width: 6%" /> </span>
      </div>
      <div style="margin: 1% 0 0 9%">
        persamaan 5 :
        <input type="text" value="{{ old('33', optional($latihanCampuran)->getAttribute('33')) }}" name="33" style="border: 0; width: 10%" /> + <input type="text" value="{{ old('34', optional($latihanCampuran)->getAttribute('34')) }}" name="34" style="border: 0; width: 10%" /> = 700.000 | x <input type="text" value="{{ old('35', optional($latihanCampuran)->getAttribute('35')) }}" name="35" style="border: 0; width: 6%" />
      </div>
      <div style="margin: 1% 0 0 36%">
        <input type="text" value="{{ old('36', optional($latihanCampuran)->getAttribute('36')) }}" name="36" style="border: 0; width: 14%" /> + <input type="text" value="{{ old('37', optional($latihanCampuran)->getAttribute('37')) }}" name="37" style="border: 0; width: 14%" /> =
        <input type="text" value="{{ old('38', optional($latihanCampuran)->getAttribute('38')) }}" name="38" style="border: 0; width: 14%" />
      </div>
      <div style="margin: 1% 0 0 36%">
        <input type="text" value="{{ old('39', optional($latihanCampuran)->getAttribute('39')) }}" name="39" style="border: 0; width: 14%" /> + <input type="text" value="{{ old('40', optional($latihanCampuran)->getAttribute('40')) }}" name="40" style="border: 0; width: 14%" /> =
        <input type="text" value="{{ old('41', optional($latihanCampuran)->getAttribute('41')) }}" name="41" style="border: 0; width: 15%" />
      </div>

      <div style="margin: 1% 10% 0 36%">
        <div style="display: flex; align-items: center">
          <hr style="flex: 1" />
          <hr width="5%" style="margin-left: 10px" />
        </div>
      </div>

      <div style="margin: 1% 5% 0 50%">
        <input type="text" value="{{ old('42', optional($latihanCampuran)->getAttribute('42')) }}" name="42" style="border: 0; width: 19%" /> =
        <input type="text" value="{{ old('43', optional($latihanCampuran)->getAttribute('43')) }}" name="43" style="border: 0; width: 19%" />
      </div>
      <div style="margin: 1% 5% 0 50%">
        <input type="text" value="{{ old('44', optional($latihanCampuran)->getAttribute('44')) }}" name="44" style="border: 0; width: 19%" /> =
        <input type="text" value="{{ old('45', optional($latihanCampuran)->getAttribute('45')) }}" name="45" style="border: 0; width: 19%" />
      </div>

      <div style="margin: 1% 0 0 9%">
        Substitusikan hasil yang didapatkan <br />
        pada langkah sebelumnya
      </div>

      <div style="margin: 1% 0 0 9%">
        <input type="text" value="{{ old('46', optional($latihanCampuran)->getAttribute('46')) }}" name="46" style="border: 0; width: 10%" /> = <input type="text" value="{{ old('47', optional($latihanCampuran)->getAttribute('47')) }}" name="47" style="border: 0; width: 10%" /> , diperoleh <input type="text" value="{{ old('48', optional($latihanCampuran)->getAttribute('48')) }}" name="48" style="border: 0; width: 10%" /> = 2
        <input type="text" value="{{ old('49', optional($latihanCampuran)->getAttribute('49')) }}" name="49" style="border: 0; width: 10%" />
      </div>
      <div style="margin: 1% 0 0 56%">
        <input type="text" value="{{ old('50', optional($latihanCampuran)->getAttribute('50')) }}" name="50" style="border: 0; width: 20%" /> =
        <input type="text" value="{{ old('51', optional($latihanCampuran)->getAttribute('51')) }}" name="51" style="border: 0; width: 20%" />
      </div>
      <div style="margin: 1% 0 0 56%">
        <input type="text" value="{{ old('52', optional($latihanCampuran)->getAttribute('52')) }}" name="52" style="border: 0; width: 20%" /> =
        <input type="text" value="{{ old('53', optional($latihanCampuran)->getAttribute('53')) }}" name="53" style="border: 0; width: 20%" />
      </div>

      <div style="margin: 20% 0 0 11%">
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
        var form = document.getElementById('storeLatihanc3');

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
