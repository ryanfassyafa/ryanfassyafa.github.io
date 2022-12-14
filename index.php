<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="akukamu.css">
    <link href="style.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" > -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.8.1/dist/sweetalert2.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'Poppins', sans-serif;
      }

      .kotak {
        margin-top: 250px;
        z-index: 1000000;
      }

      .swal2-container{
        z-index: 100000000 !important;
      }

      html,body{
        height:100%
      }

      .bg_heart {
        position: relative;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        height:100%
      }

      .heart {
        position: absolute;
        top: -50%;
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -m-transform: rotate(-45deg);
        transform: rotate(-45deg)
      }

      .heart:before {
        position: absolute;
        top: -50%;
        left: 0;
        display: block;
        content: "";
        width: 100%;
        height: 100%;
        background: inherit;
        border-radius: 100%;
      }

      .heart:after {
        position: absolute;
        top: 0;
        right: -50%;
        display: block;
        content: "";
        width: 100%;
        height: 100%;
        background: inherit;
        border-radius: 100%;
      }

      @-webkit-keyframes love {
        0%{top:110%}
      }
      @-moz-keyframes love {
        0%{top:110%}
      }
      @-ms-keyframes love {
        0%{top:110%}
      }
      @keyframes love {
        0%{top:110%}
      }
    </style>



    <!-- <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"> -->
    <title>Aku Sayang Kamu</title>



  </head>

  <body  class="bg_heart">


    <!-- <div class="bg_heart"></div> -->



    <div class="row">
      <div class="col-lg text-center kotak">
        <h3>Halo ..</h3>
        <button type="button" class="btn btn-lg btn-primar bg-pink-300 tombol py-4 px-5 shadow mb-5 fw-bold text-white" style="background: rgb(244 114 182);">KLIK AKU, DONG !</button>
        <h1 id="teks" class="d-none animate__animated animate__pulse">Ryan sayang kamu <i class="fas fa-heart text-danger animate__animated animate__heartBeat animate__repeat-3"></i></h1>
      </div>
    </div>

    <form action="" method="get">
      <input type="hidden" name="by">
    </form>


    <!-- Footer -->
    <footer class="page-footer font-small blue fixed-bottom">

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3 text-secondary"><small> Dibuat Dengan
        <i class="fas fa-heart text-danger animate__animated animate__bounce animate__repeat-3 hati"></i> Oleh
        <a target="_blank" class="text-decoration-none text-secondary" id="credit"></a></small>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->




    <!-- Optional JavaScript; choose one of the two! -->
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/61e5120832.js" crossorigin="anonymous"></script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.8.1/dist/sweetalert2.all.min.js"></script>



    <script type="text/javascript">
     var love = setInterval(function() {
      var r_num = Math.floor(Math.random() * 40) + 1;
      var r_size = Math.floor(Math.random() * 65) + 10;
      var r_left = Math.floor(Math.random() * 100) + 1;
      var r_bg = Math.floor(Math.random() * 25) + 100;
      var r_time = Math.floor(Math.random() * 5) + 5;

      $('.bg_heart').append("<div class='heart' style='width:" + r_size + "px;height:" + r_size + "px;left:" + r_left + "%;background:rgba(255," + (r_bg - 25) + "," + r_bg + ",1);-webkit-animation:love " + r_time + "s ease;-moz-animation:love " + r_time + "s ease;-ms-animation:love " + r_time + "s ease;animation:love " + r_time + "s ease'></div>");

      $('.bg_heart').append("<div class='heart' style='width:" + (r_size - 10) + "px;height:" + (r_size - 10) + "px;left:" + (r_left + r_num) + "%;background:rgba(255," + (r_bg - 25) + "," + (r_bg + 25) + ",1);-webkit-animation:love " + (r_time + 5) + "s ease;-moz-animation:love " + (r_time + 5) + "s ease;-ms-animation:love " + (r_time + 5) + "s ease;animation:love " + (r_time + 5) + "s ease'></div>");

      $('.heart').each(function() {
        var top = $(this).css("top").replace(/[^-\d\.]/g, '');
        var width = $(this).css("width").replace(/[^-\d\.]/g, '');
        if (top <= -100 || width >= 150) {
          $(this).detach();
        }
      });
    }, 500);
  </script>

</body>

</html>