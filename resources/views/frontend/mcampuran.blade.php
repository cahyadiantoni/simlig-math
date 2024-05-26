<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Simligh Math</title>
    <style>
      html {
        background-image: url("assets/background/12.png");
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
    <div class="appcontainer">
      <div style="margin: 180% 0 0 5%">
        <a href="#" onclick="showVideoModal('gB7DDyk4enM')">
          <img src="assets/icon/38.png" width="94%"/>
        </a>
      </div>
      <div style="margin: 5% 0 0 8%">
        <a href="{{ route('meliminasi') }}">
          <img src="assets/icon/11.png" width="18%" style="margin-right: 17%" />
        </a>
        <a href="{{ route('mpspltv') }}">
          <img src="assets/icon/10.png" width="18%" style="margin-right: 17%" />
        </a>
        <a href="{{ route('csspltv') }}">
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
