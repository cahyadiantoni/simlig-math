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
    <form method="POST" id="storeLatihane2" action="{{ route('storeLatihane') }}">
    @csrf
      <div style="margin: 33% 0 0 12%;">
        Memisalkan : <br>
        Mesin <input type="text" value="{{ old('1', optional($latihanEliminasi)->getAttribute('1')) }}" name="1" style="border: 0; width: 15%;" /> = x
      </div>
      <div style="margin: 1% 0 0 12%;">
        Mesin <input type="text" value="{{ old('2', optional($latihanEliminasi)->getAttribute('2')) }}" name="2" style="border: 0; width: 15%;" /> = y
      </div>

      <div style="margin: 5% 0 0 12%;">
        Maka : <br>
        <input type="text" value="{{ old('3', optional($latihanEliminasi)->getAttribute('3')) }}" name="3" style="border: 0; width: 8%;" /> + 
        <input type="text" value="{{ old('4', optional($latihanEliminasi)->getAttribute('4')) }}" name="4" style="border: 0; width: 8%;" /> + 
        <input type="text" value="{{ old('5', optional($latihanEliminasi)->getAttribute('5')) }}" name="5" style="border: 0; width: 8%;" /> = 5.700
      </div>
      <div style="margin: 1% 0 0 12%;">
        <input type="text" value="{{ old('6', optional($latihanEliminasi)->getAttribute('6')) }}" name="6" style="border: 0; width: 8%;" /> +
        <input type="text" value="{{ old('7', optional($latihanEliminasi)->getAttribute('7')) }}" name="7" style="border: 0; width: 8%; margin-right: 15%;" /> = 3.400
      </div>
      <div style="margin: 1% 0 0 12%;">
        <input type="text" value="{{ old('8', optional($latihanEliminasi)->getAttribute('8')) }}" name="8" style="border: 0; width: 8%;" /> +
        <input type="text" value="{{ old('9', optional($latihanEliminasi)->getAttribute('9')) }}" name="9" style="border: 0; width: 8%; margin-right: 15%;" /> = 4.200
      </div>
      
      
      <div style="margin: 5% 0 0 12%;">
        Ditanyakan : <br>
        <input type="text" value="{{ old('10', optional($latihanEliminasi)->getAttribute('10')) }}" name="10" style="border: 0; width: 80%;" />
      </div>

      <div style="margin: 5% 0 0 12%;">
        Jawaban : <br>
        1) Eliminasi y dan z dari persamaan (1) <br>
        dan persamaan (2) <br>
        <input type="text" value="{{ old('11', optional($latihanEliminasi)->getAttribute('11')) }}" name="11" style="border: 0; width: 8%;" /> +
        <input type="text" value="{{ old('12', optional($latihanEliminasi)->getAttribute('12')) }}" name="12" style="border: 0; width: 8%;" /> +
        <input type="text" value="{{ old('13', optional($latihanEliminasi)->getAttribute('13')) }}" name="13" style="border: 0; width: 8%;" /> =
        <input type="text" value="{{ old('14', optional($latihanEliminasi)->getAttribute('14')) }}" name="14" style="border: 0; width: 10%;" />
      </div>
      <div style="margin: 1% 0 0 12%;">
        <input type="text" value="{{ old('15', optional($latihanEliminasi)->getAttribute('15')) }}" name="15" style="border: 0; width: 8%;" /> +
        <input type="text" value="{{ old('16', optional($latihanEliminasi)->getAttribute('16')) }}" name="16" style="border: 0; width: 8%; margin-right: 14%;" /> =
        <input type="text" value="{{ old('17', optional($latihanEliminasi)->getAttribute('17')) }}" name="17" style="border: 0; width: 10%;" />
      </div>
      <div style="margin: 1% 0 0 12%;">
        <input type="text" value="{{ old('18', optional($latihanEliminasi)->getAttribute('18')) }}" name="18" style="border: 0; width: 8%; margin-left: 28%;" /> =
        <input type="text" value="{{ old('19', optional($latihanEliminasi)->getAttribute('19')) }}" name="19" style="border: 0; width: 10%;" /> (persamaan 4)
      </div>

      <div style="margin: 5% 0 0 12%;">
        2) Eliminasi x dan z dari persamaan (1) <br>
        dan persamaan (3) <br>
        <input type="text" value="{{ old('20', optional($latihanEliminasi)->getAttribute('20')) }}" name="20" style="border: 0; width: 8%;" /> +
        <input type="text" value="{{ old('21', optional($latihanEliminasi)->getAttribute('21')) }}" name="21" style="border: 0; width: 8%;" /> +
        <input type="text" value="{{ old('22', optional($latihanEliminasi)->getAttribute('22')) }}" name="22" style="border: 0; width: 8%;" /> =
        <input type="text" value="{{ old('23', optional($latihanEliminasi)->getAttribute('23')) }}" name="23" style="border: 0; width: 10%;" />
      </div>
      <div style="margin: 1% 0 0 12%;">
        <input type="text" value="{{ old('24', optional($latihanEliminasi)->getAttribute('24')) }}" name="24" style="border: 0; width: 8%;" /> +
        <input type="text" value="{{ old('25', optional($latihanEliminasi)->getAttribute('25')) }}" name="25" style="border: 0; width: 8%; margin-right: 14%;" /> =
        <input type="text" value="{{ old('26', optional($latihanEliminasi)->getAttribute('26')) }}" name="26" style="border: 0; width: 10%;" />
      </div>
      <div style="margin: 1% 0 0 12%;">
        <input type="text" value="{{ old('27', optional($latihanEliminasi)->getAttribute('27')) }}" name="27" style="border: 0; width: 8%; margin-left: 28%;" /> =
        <input type="text" value="{{ old('28', optional($latihanEliminasi)->getAttribute('28')) }}" name="28" style="border: 0; width: 10%;" /> (persamaan 5)
      </div>

      <div style="margin: 5% 0 0 12%;">
        3) Eliminasi z dari persamaan (3) <br>
        dan persamaan (4) <br>
        <input type="text" value="{{ old('29', optional($latihanEliminasi)->getAttribute('29')) }}" name="29" style="border: 0; width: 8%;" /> +
        <input type="text" value="{{ old('30', optional($latihanEliminasi)->getAttribute('30')) }}" name="30" style="border: 0; width: 8%;" /> =
        <input type="text" value="{{ old('31', optional($latihanEliminasi)->getAttribute('31')) }}" name="31" style="border: 0; width: 10%;" />
      </div>
      <div style="margin: 1% 0 0 12%;">
        <input type="text" value="{{ old('32', optional($latihanEliminasi)->getAttribute('32')) }}" name="32" style="border: 0; width: 8%; margin-left: 14%;" /> =
        <input type="text" value="{{ old('33', optional($latihanEliminasi)->getAttribute('33')) }}" name="33" style="border: 0; width: 10%;" />
      </div>
      <div style="margin: 1% 0 0 12%;">
        <input type="text" value="{{ old('34', optional($latihanEliminasi)->getAttribute('34')) }}" name="34" style="border: 0; width: 8%; margin-left: 14%;" /> =
        <input type="text" value="{{ old('35', optional($latihanEliminasi)->getAttribute('35')) }}" name="35" style="border: 0; width: 10%;" />
      </div>

      <div style="margin: 17% 0 0 11%">
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
        var form = document.getElementById('storeLatihane2');

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
