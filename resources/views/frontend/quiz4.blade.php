<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Simligh Math</title>
    <style>
      html {
        background-image: url("assets/background/42.png");
      }
    </style>
    <link rel="stylesheet" href="assets/style.css" />
  </head>
  <body>
    <div class="appcontainer" style="color: gold; font-size: 14px;">
      <div style="margin: 30% 5% 0 12%;">
        Persamaan 1 = <input readonly value="{{ $quiz->getAttribute('1') }}" type="text" style="border: 0; width: 50%; font-size: 18px;" />
      </div>
      <div style="margin: 2% 5% 0 12%;">
        Persamaan 2 = <input readonly value="{{ $quiz->getAttribute('2') }}" type="text" style="border: 0; width: 50%; font-size: 18px;" />
      </div>
      <div style="margin: 2% 5% 0 12%;">
        Persamaan 3 = <input readonly value="{{ $quiz->getAttribute('3') }}" type="text" style="border: 0; width: 50%; font-size: 18px;" />
      </div>

      <div style="margin: 6% 5% 0 12%;">
        Kaca Kecil (x) = <input readonly value="{{ $quiz->getAttribute('4') }}" type="text" style="border: 0; width: 15%; font-size: 18px;" /> gram
      </div>
      <div style="margin: 2% 5% 0 12%;">
        Kaca Sedang (y) = <input readonly value="{{ $quiz->getAttribute('5') }}" type="text" style="border: 0; width: 15%; font-size: 18px;" /> gram
      </div>
      <div style="margin: 2% 5% 0 12%;">
        Kaca Besar (z) = <input readonly value="{{ $quiz->getAttribute('6') }}" type="text" style="border: 0; width: 15%; font-size: 18px;" /> gram
      </div>

      <div style="margin: 15% 5% 0 15%;">
        2a + c = <input readonly value="{{ $quiz->getAttribute('7') }}" type="text" style="border: 0; width: 15%; font-size: 18px;" />
      </div>

      <div style="margin: 28% 5% 0 15%;">
        x + y + z = <input readonly value="{{ $quiz->getAttribute('8') }}" type="text" style="border: 0; width: 15%; font-size: 18px;" />
      </div>

      <div style="margin: 35% 5% 0 15%;">
        Carolina (x) = <input readonly value="{{ $quiz->getAttribute('9') }}" type="text" style="border: 0; width: 15%; font-size: 18px;" /> tahun
      </div>
      <div style="margin: 2% 5% 0 15%;">
        Wulan (y) = <input readonly value="{{ $quiz->getAttribute('10') }}" type="text" style="border: 0; width: 15%; font-size: 18px;" /> tahun
      </div>
      <div style="margin: 2% 5% 0 15%;">
        Hani (z) = <input readonly value="{{ $quiz->getAttribute('11') }}" type="text" style="border: 0; width: 15%; font-size: 18px;" /> tahun
      </div>

      <div style="margin: 15% 0 0 15%">
        <a href="{{ route('quiz2') }}">
          <img src="assets/icon/11.png" width="18%" style="margin-right: 50%" />
        </a>
        <a href="{{ route('quizhasil') }}">
          <img src="assets/icon/12.png" width="18%" />
        </a>
      </div>
    </div>
  </body>
</html>
