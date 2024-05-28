<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Simligh Math</title>
    <style>
      html {
        background-image: url("assets/background/8.png");
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
        Sistem Persamaan Linear Tiga Variabel (SPLTV) merupakan bentuk perluasan dari SPLDV . SPLTV adalah satu persamaan matematika yang terdiri atas tiga persamaan linear yang masing - masing persamaan bervariabel  tiga (misal x,y dan z). Dengan demikian bentuk umum dari SPLTV dalam x,y, dan z dapat ditulis sebagai berikut : 
        <br>
        <div style="margin-top: 3%; font-size: 14px; ; display: flex; justify-content: space-between; align-items: center;">
          <div>
            a1x + b1y + c1z  = d1 
          </div>  
          <div>
            ax + by  + cz  = d 
          </div>
        </div>
        <div style="font-size: 14px; ; display: flex; justify-content: space-between; align-items: center;">
          <div>
            a2x + b2y + c2z = d2
          </div>  
          <div>
            atau
          </div>  
          <div>
            ex +  fy  + gz  = h 
          </div>  
        </div>
        <div style="margin-bottom: 3%; font-size: 14px; ; display: flex; justify-content: space-between; align-items: center;">
          <div>
            a3x + b3y + c3z = d3 
          </div>  
          <div>
            ix  + jy  + kz  = l
          </div>  
        </div>
        Jika nilai x =xo, y = y0, dan z = z0. Ditulis dengan pasangan terurut (x0, y0, z0) memenuhi SPLTV diatas, maka haruslah berlaku hubungan : 
        <div style="display: flex; justify-content: center; font-size: 14px;  align-items: center;">
            a1x0 + b1y0 + c1z0 = d1 
            <br>
            a2x0 + b2y0 + c2z0 = d2
            <br>
            a3x0 + b3x0 + c3z0 = d3 
        </div>
        Penyelesaian yang dapat digunakan ada 3 yaitu :
        <div style="font-size: 14px; line-height: 18px">
            1. Metode Substitusi
            <br>
            2. Metode Sub
            <br>
            3. Metode Campuran 
        </div>
      </div>
      
      <div style="margin: 8% 0 0 5%">
        <a href="#" onclick="showVideoModal('eWgdbgDolWY')">
          <img src="assets/icon/38.png" width="94%"/>
        </a>
      </div>
      <div style="margin: 5% 0 0 8%">
        <a href="{{ route('materi') }}">
          <img src="assets/icon/11.png" width="18%" style="margin-right: 17%" />
        </a>
        <a href="{{ route('materi') }}">
          <img src="assets/icon/10.png" width="18%" style="margin-right: 17%" />
        </a>
        <a href="{{ route('mpspltv') }}">
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
