<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

if (! include_once "p/partials/head.php"){echo "no head found";die();}
 ?>

<aside id="slidding_menu">  <?php include_once "p/components/nav.php"; ?>
</aside>
<div id="panel">
  <main>
    <section id="hero">
      <?php //include_once "p/partials/hero.php"; ?>
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
      <div class="galeria"></div>
    </section>
    <section id="audios">
      <?php include_once "p/components/audio_player.php"; ?>
    </section>
    <section id="registro">
      <div class="container"><?php include_once "p/components/forma_registro.php"; ?></div>
    </section>
  </main>
  <? include_once "p/partials/foot.php"; ?>
</div>
</body>
<?php include_once "p/services/scripts.php"; ?>
</html>
