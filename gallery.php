
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Gallery >> JM Fotografía pets</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/galleryStyle.css">
    <link rel="stylesheet" href="css/animated.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  </head>
  <body>
    <header>
      <div class="menu-bar">
        <a href="#" class="bt-menu" id="bt-menu"><span  class="icon-menu"></span></a><img src="img/huella.png" alt="">
      </div>
      <nav>
        <div class="div-nav-logo">
          <a href="index.php">
            <img src="img/huella.png" alt="" >
          </a>
        </div>
        <div class="div-nav-menu">
          <ul>
            <li class="submenu"><a href="home.php"><span class="icon-home"></span>Nuestro trabajo <span class="caret icon-circle-down"></span> </a>
              <ul class="submenu-children">
                <li><a href="gallery.php"><span class="icon-images"></span>Foto Galeria</a></li>
                <li><a href="#"><span class="icon-video-camera"></span>Video Galeria</a></li>
                <li><a href="#"><span class="icon-camera"></span>Sesiones personalizadas</a></li>
                <li><a href="#"><span class="icon-images"></span>Eventos Caninos</a></li>
              </ul>
            </li>
            <li><a href="#"><span class="icon-images"></span>Nuestros servicios</a></li>
            <li><a href="#"><span class="icon-phone"></span>Contactame</a></li>
            <li><a href="#"><span class="icon-user-check"></span>Suscribete</a></li>
          </ul>
        </div>
      </nav>
    </header>
  </head>
  <body>
    <div class="title">
      <h1>GALERIA</h1>
    </div>
    <div class="content-gallery">
      <div class="row">
      <?php
        echo "<p id='max-img' style='display:none;'>".$total_imagenes = count(glob('img/Gallery/{gallery-*.jpg}',GLOB_BRACE));"</p>";
        for ($i = 1; $i <= 4; $i++) {
          echo "<div class='col gallery-image'>
                  <img src='img/Gallery/gallery-".$i.".jpg' id='gallery-src-".$i."' class='gallery-src-".$i."'>
                </div>";
        }
      ?>
      </div>
      <div class="slide">
      <?php
           $count_div = intval($total_imagenes/4) + 1;
           for ($i=1; $i <= $count_div ; $i++) {
            echo "<div class='slide-item rounded-circle'></div>";
          }
       ?>
      </div>
    </div>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/active.js"></script>
  </body>
</html>
