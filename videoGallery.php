<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>VideoGallery >> JM Fotografía pets</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/VideoStyle.css">
    <link rel="stylesheet" href="css/animated.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  </head>
  <body>
    <?php
    include 'menu.php';
    ?>
    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Films</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">

            <?php
            echo "<p id='max-vid' style='display:none;'>".$total_video = count(glob('video/videoGallery/{video-*.mp4}',GLOB_BRACE));"</p>";
              for ($i = 1; $i <= $total_video; $i++) {
                echo "<div class='col-md-4'>
                        <div class='card mb-4 box-shadow'>
                          <video class='card-img-top' controls src='video/videoGallery/video-".$i.".mp4' poster='video/videoGallery/video-".$i.".jpg'>
                          </video>
                          <div class='card-body'>
                            <p class='card-text'>Hola a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          </div>
                        </div>
                      </div>";
              }
             ?>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <div class="Autors">
        <p>® Copyright 2018, Todos los derechos reservados.</p>
      </div>
      <div class="social-networks">
        <a href="#">
          <span class="icon-facebook2"></span>
        </a>
        <a href="#">
          <span class="icon-instagram"></span>
        </a>
        <a href="intent://send/+XXXXXXXXXXX#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end">
          <span class="icon-whatsapp"></span>
        </a>
        <a href="#">
          <span class="icon-youtube2"></span>
        </a>
      </div>
    </footer>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.flexslider.min.js"></script>
    <script src="js/active.js"></script>
  </body>
</html>
