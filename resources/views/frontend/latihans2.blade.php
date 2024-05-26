<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Simligh Math</title>
    <style>
      html {
        background-image: url("assets/background/30.png");
      }
    </style>
    <link rel="stylesheet" href="assets/style.css" />
  </head>
  <body>
    <div class="appcontainer" style="color: gold; font-size: 14px;">
    <form method="POST" id="storeLatihans2" action="{{ route('storeLatihans') }}">
    @csrf
      <div style="margin: 33% 0 0 12%;">
        Misalkan : <br>
        <input type="text" value="{{ old('1', optional($latihanSubstitusi)->getAttribute('1')) }}" name="1" style="border: 0; width: 28%;" /> = x
      </div>
      <div style="margin: 1% 0 0 12%;">
        <input type="text" value="{{ old('2', optional($latihanSubstitusi)->getAttribute('2')) }}" name="2" style="border: 0; width: 28%;" /> = y
      </div>
      <div style="margin: 1% 0 0 12%;">
        <input type="text" value="{{ old('3', optional($latihanSubstitusi)->getAttribute('3')) }}" name="3" style="border: 0; width: 28%;" /> = z
      </div>

      <div style="margin: 5% 0 0 12%;">
        Maka : <br>
        <input type="text" value="{{ old('4', optional($latihanSubstitusi)->getAttribute('4')) }}" name="4" style="border: 0; width: 8%;" /> + 
        <input type="text" value="{{ old('5', optional($latihanSubstitusi)->getAttribute('5')) }}" name="5" style="border: 0; width: 8%;" /> + 
        <input type="text" value="{{ old('6', optional($latihanSubstitusi)->getAttribute('6')) }}" name="6" style="border: 0; width: 8%;" /> = 26.000
      </div>
      <div style="margin: 1% 0 0 12%;">
        <input type="text" value="{{ old('7', optional($latihanSubstitusi)->getAttribute('7')) }}" name="7" style="border: 0; width: 8%;" /> +
        <input type="text" value="{{ old('8', optional($latihanSubstitusi)->getAttribute('8')) }}" name="8" style="border: 0; width: 8%; margin-right: 15%;" /> = 19.000
      </div>
      <div style="margin: 1% 0 0 12%;">
        <input type="text" value="{{ old('9', optional($latihanSubstitusi)->getAttribute('9')) }}" name="9" style="border: 0; width: 8%;" /> +
        <input type="text" value="{{ old('10', optional($latihanSubstitusi)->getAttribute('10')) }}" name="10" style="border: 0; width: 8%; margin-right: 15%;" /> = 21.000
      </div>


      <div style="margin: 5% 0 0 12%;">
        Ditanyakan : <br>
        Apa saja barang yang bisa dibeli <br>
        dengan uang sebesar Rp. 14.000,00? <br>
      </div>

      <div style="margin: 5% 0 0 12%;">
        Jawaban : <br>
        1) Rubah persamaan 1 menjadi fungsi x <br>
        <input type="text" value="{{ old('11', optional($latihanSubstitusi)->getAttribute('11')) }}" name="11" style="border: 0; width: 8%;" /> +
        <input type="text" value="{{ old('12', optional($latihanSubstitusi)->getAttribute('12')) }}" name="12" style="border: 0; width: 8%;" /> +
        <input type="text" value="{{ old('13', optional($latihanSubstitusi)->getAttribute('13')) }}" name="13" style="border: 0; width: 8%;" /> =
        <input type="text" value="{{ old('14', optional($latihanSubstitusi)->getAttribute('14')) }}" name="14" style="border: 0; width: 16%;" />
      </div>
      <div style="margin: 1% 0 0 12%;">
        <input type="text" value="{{ old('15', optional($latihanSubstitusi)->getAttribute('15')) }}" name="15" style="border: 0; width: 8%;" /> =
        <input type="text" value="{{ old('16', optional($latihanSubstitusi)->getAttribute('16')) }}" name="16" style="border: 0; width: 45%;" />
      </div>

      <div style="margin: 5% 0 0 12%;">
        2) Substitusikan fungsi x ke dalam <br>
        persamaan 2 <br>
        <input type="text" value="{{ old('17', optional($latihanSubstitusi)->getAttribute('17')) }}" name="17" style="border: 0; width: 8%;" /> +
        <input type="text" value="{{ old('18', optional($latihanSubstitusi)->getAttribute('18')) }}" name="18" style="border: 0; width: 8%;" /> = 19.000
      </div>
      <div style="margin: 1% 0 0 12%;">
        ( <input type="text" value="{{ old('19', optional($latihanSubstitusi)->getAttribute('19')) }}" name="19" style="border: 0; width: 25%;" /> ) +
        <input type="text" value="{{ old('20', optional($latihanSubstitusi)->getAttribute('20')) }}" name="20" style="border: 0; width: 8%;" /> = 19.000
      </div>
      <div style="margin: 1% 0 0 12%;">
        <input type="text" value="{{ old('21', optional($latihanSubstitusi)->getAttribute('21')) }}" name="21" style="border: 0; width: 8%;" /> =
        <input type="text" value="{{ old('22', optional($latihanSubstitusi)->getAttribute('22')) }}" name="22" style="border: 0; width: 20%;  margin-right: 12%;" /> = 19.000
      </div>
      <div style="margin: 1% 0 0 12%;">
        <input type="text" value="{{ old('23', optional($latihanSubstitusi)->getAttribute('23')) }}" name="23" style="border: 0; width: 8%;" /> =
        <input type="text" value="{{ old('24', optional($latihanSubstitusi)->getAttribute('24')) }}" name="24" style="border: 0; width: 20%;" />
      </div>
      <div style="margin: 1% 0 0 12%;">
        <input type="text" value="{{ old('25', optional($latihanSubstitusi)->getAttribute('25')) }}" name="25" style="border: 0; width: 8%;" /> =
        <input type="text" value="{{ old('26', optional($latihanSubstitusi)->getAttribute('26')) }}" name="26" style="border: 0; width: 20%;" />
      </div>
      <div style="margin: 1% 0 0 12%;">
        <input type="text" value="{{ old('27', optional($latihanSubstitusi)->getAttribute('27')) }}" name="27" style="border: 0; width: 8%;" /> =
        <input type="text" value="{{ old('28', optional($latihanSubstitusi)->getAttribute('28')) }}" name="28" style="border: 0; width: 20%;" />
      </div>

      <div style="margin: 25% 0 0 11%">
        <a href="#">
          <img src="assets/icon/11.png" width="18%" onclick="submitForm('1')" style="margin-right: 50%" />
        </a>
        <a href="#">
          <img src="assets/icon/12.png" width="18%" onclick="submitForm('3')"/>
        </a>
      </div>
      </form>
    </div>
  </body>
</html>

<script>
    function submitForm(redirect) {
        var form = document.getElementById('storeLatihans2');

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
