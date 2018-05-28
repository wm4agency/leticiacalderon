<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

if (! include_once "p/partials/head.php"){echo "no head found";die();}
 ?>

<aside id="slidding_menu"></aside>
<div id="panel">
  <main>
    <div class="container">
      <div class="row">
        <div class="one-half column" style="margin-top: 25%">
          <h4>Basic Page</h4>
          <p>This index.html page is a placeholder with the CSS, font and favicon. It's just waiting for you to add some content! If you need some help hit up the <a href="http://www.getskeleton.com">Skeleton documentation</a>.</p>
        </div>
      </div>
    </div>
  </main>
  <footer></footer>
</div>
</body>
<?php include_once "p/services/scripts.php"; ?>
</html>
