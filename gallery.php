
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
    <div class="title-mini">
      <h1>GALERIA</h1>
    </div>
    <div class="mini-gallery">
      <ul>
        <?php
          echo "<p id='max-img' style='display:none;'>".$total_imagenes_mini = count(glob('img/Gallery/mini-gallery/{mini_gallery-*.jpg}',GLOB_BRACE));"</p>";
          for ($i = 1; $i <= $total_imagenes_mini; $i++) {
            echo "<li>
                    <a>
                      <img src='img/Gallery/mini-gallery/mini_gallery-".$i.".jpg' id='gallery-src-".$i."' class='gallery-src-".$i."'>
                    </a>
                  </li>";
          }
        ?>
      </ul>
    </div>
    <div class="content-gallery">
      <ul>
      <?php
      echo "<p id='max-img-2' style='display:none;'>".$total_imagenes = count(glob('img/Gallery/{gallery-*.jpg}',GLOB_BRACE));"</p>";
        for ($i = 1; $i <= $total_imagenes; $i++) {
          echo "<li>
                  <div class='gallery-set'>
                    <a href='#img".$i."1'>Ver Galería</a>
                  </div>
                  <a>
                    <img src='img/Gallery/gallery-".$i.".jpg' id='gallery-src-".$i."' class='gallery-src-".$i."'>
                  </a>
                </li>";
        }
      ?>
    </ul>
      </div>
      <?php
        for ($i = 1; $i <= $total_imagenes; $i++) {
            $total_imagenes_modal = count(glob('img/Gallery/gallery-'.$i.'./{mini_gallery-*.jpg}',GLOB_BRACE));
          for ($j = 1; $j <= $total_imagenes_modal; $j++) {
            if ($j == 1) {
              echo "<div class='box-modal' id='img".$i.$j."'>
                  <div class='image-modal'>
                      <a href='#img".$i.($j+($total_imagenes_modal-1))."'>&#60</a>
                      <a href='#img".$i.($j+1)."'>
                        <img src='img/Gallery/gallery-".$i."/mini_gallery-".$j.".jpg'>
                      </a>
                      <a href='#img".$i.($j+1)."'>></a>
                    </div>
                      <a href='gallery.php' class='close-gallery'><span class='icon-cancel-circle'></span></a>
                </div>";
            } else if ($j == $total_imagenes_modal){
              echo "<div class='box-modal' id='img".$i.$j."'>
                  <div class='image-modal'>
                      <a href='#img".$i.($j-1)."'>&#60</a>
                      <a href='#img".$i.(1)."'>
                        <img src='img/Gallery/gallery-".$i."/mini_gallery-".$j.".jpg'>
                      </a>
                      <a href='#img".$i.(1)."'>></a>
                    </div>
                      <a href='gallery.php' class='close-gallery'><span class='icon-cancel-circle'></span></a>
                </div>";
            }
            else {
              echo "<div class='box-modal' id='img".$i.$j."'>
                  <div class='image-modal'>
                      <a href='#img".$i.($j-1)."'>&#60</a>
                      <a href='#img".$i.($j+1)."'>
                        <img src='img/Gallery/gallery-".$i."/mini_gallery-".$j.".jpg'>
                      </a>
                      <a href='#img".$i.($j+1)."'>></a>
                    </div>
                      <a href='gallery.php' class='close-gallery'><span class='icon-cancel-circle'></span></a>
                </div>";
            }
          }
        }
      ?>
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
