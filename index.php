<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

if (! include_once "p/partials/head.php"){echo "no head found";die();}
 ?>

<aside id="slidding_menu">  <?php include_once "p/components/nav.php"; ?>
</aside>
<div id="panel">
  <i class="burger m-nav-toggler"></i>
  <main>
    <section id="hero">
      <?php include_once "p/partials/hero.php"; ?>
    </section>
    <section id="semblanza">
      <?php include_once "p/partials/s_semblanza.php"; ?>
    </section>
    <section id="compromisos">
      <?php include_once "p/partials/s_compromisos.php"; ?>
    </section>
    <section id="redes">

    </section>
    <section id="decalogo">
      <?php include_once "p/partials/s_decalogo.php"; ?>
    </section>
    <section id="galeria">
      <div id="galeria-DOM" class="galeria"></div>
      <div id="pswpGal" class="galeria"></div>
    </section>
    <section id="audios">
      <div class="container"><?php include_once "p/components/audio_player.php"; ?></div>
    </section>
    <section id="registro">
      <div class="container"><?php include_once "p/components/forma_registro.php"; ?></div>
    </section>
  </main>
  <?php include_once "p/partials/foot.php"; ?>
</div>
<?php include_once "p/components/photoswipe_element.php"; ?>
</body>
<?php include_once "p/services/scripts.php"; ?>
</html>
