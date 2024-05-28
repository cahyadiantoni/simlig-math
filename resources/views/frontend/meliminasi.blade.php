<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Simligh Math</title>
    <style>
      html {
        background-image: url("assets/background/11.png");
      }

      .modal {
            display: none; /* Modal diatur tidak terlihat awalnya */
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000; /* Menempatkan modal di depan semua elemen lain */
            background-color: rgba(0, 0, 0, 0.5); /* Transparansi latar belakang modal */
            width: 90%;
            max-width: 600px; /* Maksimum lebar modal */
            padding: 20px;
            border-radius: 10px;
        }

        .modal-content {
            text-align: center;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            color: white;
            font-size: 24px;
        }
    </style>
    <link rel="stylesheet" href="assets/style.css" />
  </head>
  <body>
  <div class="appcontainer" style="font-family: Perpetua, serif; text-align: justify; color: #004AAD; font-size: 16px; line-height: 20px">
      <div style="margin: 28% 8% 0 8%;">
      Metode eliminasi merupakan metode menghilangkan salah satu variabel untuk mendapatkan nilai pada variabel lainnya. Berikut adalah langkah - langkahnya : 
      <br><br>
      Langkah 1 : <br>
      Mengeliminasi salah satu peubah x atau y atau z sehingga diperoleh SPLDV 
      <br><br>
      Langkah 2 : <br>
      Menyeuaikan SPLDV yang didapat pada langkah 1 
      <br><br>
      Langkah 3: <br>
      Mensubstitusikan nilai - nilai peubah yang diperoleh pada langkah 2 kedalam salah satu persamaan semula untuk mendapatkan nilai peubah yang lainnya. 
      </div>
      <div style="margin: 65% 0 0 5%">
        <a href="#" onclick="showVideoModal('aAAeeteNmOk')">
          <img src="assets/icon/38.png" width="94%"/>
        </a>
      </div>
      <div style="margin: 5% 0 0 8%">
        <a href="{{ route('msubstitusi') }}">
          <img src="assets/icon/11.png" width="18%" style="margin-right: 17%" />
        </a>
        <a href="{{ route('mpspltv') }}">
          <img src="assets/icon/10.png" width="18%" style="margin-right: 17%" />
        </a>
        <a href="{{ route('mcampuran') }}">
          <img src="assets/icon/12.png" width="18%" />
        </a>
      </div>
    </div>

    <!-- Modal -->
    <div id="videoModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeVideoModal()">&times;</span>
            <iframe id="videoFrame" width="100%" height="315" src="" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

    <script>
        function showVideoModal(videoId) {
            document.getElementById('videoFrame').src = `https://www.youtube.com/embed/${videoId}`;
            document.getElementById('videoModal').style.display = 'block';
        }

        function closeVideoModal() {
            document.getElementById('videoFrame').src = '';
            document.getElementById('videoModal').style.display = 'none';
        }
    </script>
  </body>
</html>
