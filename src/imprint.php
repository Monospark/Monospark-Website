<?php
  $title = "Imprint";
  $description = "Description";
?>

<?php
  ob_start();
?>

<style>
  p {
    color: #444;
  }
  
  h1 {
    color: #3366cc !important;
    font-size: 34px !important;
  }
  
  hr {
    border-color: #3366cc !important;
  }
</style>

<?php
  $style = ob_get_contents();
  ob_end_clean();
?>

<?php
  include "header.php"
?>

<main class="container text-center">
  <h1>Imprint</h1>
  <hr />
  <p>
    Christopher Schnick <br />
    Reichertshalde 81 <br />
    71642 Ludwigsburg
  </p>
  <p>
    Tel.: +49 016090657824 </br> 
    Email: c.schnick@monospark.org 
  </p>
</main>

<?php
  include "footer.php"
?>