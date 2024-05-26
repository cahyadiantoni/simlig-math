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
    <form method="POST" id="storeQuiz" action="{{ route('storeQuiz') }}" enctype="multipart/form-data">
    @csrf
      <div style="margin: 32% 5% 0 12%; display: flex; flex-direction: row;">
        <label for="file1" style="margin-right: 2px">Foto Jawabanmu : </label>
        <input name="file1" id="file1" type="file" style="border: 0; width: 60%;" accept="image/*" /> 
      </div>

      <div style="margin: 1% 5% 0 12%;">
        Persamaan 1 = <input name="1" type="text" style="border: 0; width: 50%; font-size: 18px;" />
      </div>
      <div style="margin: 1% 5% 0 12%;">
        Persamaan 2 = <input name="2" type="text" style="border: 0; width: 50%; font-size: 18px;" />
      </div>
      <div style="margin: 1% 5% 0 12%;">
        Persamaan 3 = <input name="3" type="text" style="border: 0; width: 50%; font-size: 18px;" />
      </div>

      <div style="margin: 4% 5% 0 12%; display: flex; flex-direction: row;">
        <label for="file2" style="margin-right: 2px">Foto Jawabanmu : </label>
        <input name="file2" id="file2" type="file" style="border: 0; width: 60%;" accept="image/*" /> 
      </div>
      <div style="margin: 1% 5% 0 12%;">
        Kaca Kecil (x) = <input name="4" type="number" style="border: 0; width: 15%; font-size: 18px;" /> gram
      </div>
      <div style="margin: 1% 5% 0 12%;">
        Kaca Sedang (y) = <input name="5" type="number" style="border: 0; width: 15%; font-size: 18px;" /> gram
      </div>
      <div style="margin: 1% 5% 0 12%;">
        Kaca Besar (z) = <input name="6" type="number" style="border: 0; width: 15%; font-size: 18px;" /> gram
      </div>

      <div style="margin: 7% 5% 0 12%; display: flex; flex-direction: row;">
        <label for="file3" style="margin-right: 2px">Foto Jawabanmu : </label>
        <input name="file3" id="file3" type="file" style="border: 0; width: 60%;" accept="image/*" /> 
      </div>
      <div style="margin: 1% 5% 0 12%;">
        2a + c = <input name="7" type="number" style="border: 0; width: 15%; font-size: 18px;" />
      </div>

      <div style="margin: 22% 5% 0 12%; display: flex; flex-direction: row;">
        <label for="file4" style="margin-right: 2px">Foto Jawabanmu : </label>
        <input name="file4" id="file4" type="file" style="border: 0; width: 60%;" accept="image/*" /> 
      </div>
      <div style="margin: 1% 5% 0 15%;">
        x + y + z = <input name="8" type="number" style="border: 0; width: 15%; font-size: 18px;" />
      </div>

      <div style="margin: 25% 5% 0 12%; display: flex; flex-direction: row;">
        <label for="file5" style="margin-right: 2px">Foto Jawabanmu : </label>
        <input name="file5" id="file5" type="file" style="border: 0; width: 60%;" accept="image/*" /> 
      </div>
      <div style="margin: 1% 5% 0 15%;">
        Carolina (x) = <input name="9" type="number" style="border: 0; width: 15%; font-size: 18px;" /> tahun
      </div>
      <div style="margin: 1% 5% 0 15%;">
        Wulan (y) = <input name="10" type="number" style="border: 0; width: 15%; font-size: 18px;" /> tahun
      </div>
      <div style="margin: 1% 5% 0 15%;">
        Hani (z) = <input name="11" type="number" style="border: 0; width: 15%; font-size: 18px;" /> tahun
      </div>

      <div style="margin: 15% 0 0 15%">
        <a href="{{ route('quiz2') }}">
          <img src="assets/icon/11.png" width="18%" style="margin-right: 50%" />
        </a>
        <a href="#">
          <img src="assets/icon/12.png" width="18%" onclick="confirmSubmit()"/>
        </a>
      </div>
      </form>
    </div>
  </body>
</html>

<script>
    function confirmSubmit() {
        var form = document.getElementById('storeQuiz');

        // Validasi input sebelum submit
        var inputs = form.querySelectorAll('input');
        for (var i = 0; i < inputs.length; i++) {
            if (inputs[i].value.trim() === '') {
                alert('Harap lengkapi semua input sebelum submit.');
                return false; // Menghentikan proses submit
            }
        }

        var confirmation = confirm("Yakin ingin submit jawaban quiz?");
        if (confirmation) {
            submitForm();
        }
    }

    function submitForm() {
        var form = document.getElementById('storeQuiz');
        form.submit();
    }
</script>

