<?php
  $title = "Imprint";
  $description = "The imprint of monospark.org.";
?>

<?php
  ob_start();
?>

<style>
  section {
	height: 850px;
  }
  
  section p {
    text-align: center;
  }
</style>

<?php
  $style = ob_get_contents();
  ob_end_clean();
?>

<?php
  include "header.php"
?>

<section class="container">
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
</section>

<?php
  include "footer.php"
?>