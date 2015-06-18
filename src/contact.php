<?php
  $title = "Title";
  $description = "Description";
?>

<?php
  ob_start();
?>

<style>
  p {
    background: #123456;
  }
</style>

<?php
  $style = ob_get_contents();
  ob_end_clean();
?>

<?php
  include "header.php"
?>

<p>
  Hey!
</p>

<?php
  include "footer.php"
?>