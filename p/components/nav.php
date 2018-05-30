<!--
<button class="hamburger hamburger--arrow-r" type="button">
   <span class="hamburger-box m-nav-toggler">
     <span class="hamburger-inner"></span>
   </span>
</button>
-->
<i class="burger m-nav-toggler"></i>

<nav id="m-menu">
  <?php include "leticiaCalderon.php"; ?>
  <ul class="nav-links">
    <li data-target="#semblanza">semblanza</li>
    <li data-target="#compromisos">compromisos</li>
    <!-- <li data-target="#comunidades">comunidades</li> -->
    <li data-target="#decalogo">decálogo</li>
    <li data-target="#galeria">galería</li>
    <li data-target="#audios">audios</li>
    <li data-target="#registro">¡súmate!</li>
  </ul>
   <ul class="sociales">
     <li><a href="https://www.facebook.com/LeticiaCalderonR/" target="_blank"><i class="fab fa-facebook"></i></a></li>
     <li><a href="https://twitter.com/LetiCalderonR" target="_blank"><i class="fab fa-instagram"></i></a></li>
     <li><a href="https://www.instagram.com/leticalderonr/" target="_blank"><i class="fab fa-twitter"></i></a></li>
   </ul>
</nav>

<?php include getcwd()."/p/components/votaPRI.php"; ?>
