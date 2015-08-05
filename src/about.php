<?php
  $title = "About &#183; Monospark";
  $description = "Some information about Monospark.";
?>

<?php
  ob_start();
?>

<style>
  section img {
    float: left;
	max-width: 100%;
	border-radius: 2px;
  }
  
  h2 {
    margin-top: 0 !important;
    margin-bottom: 0.7em !important;
  }

  .links p {
    font-size: 115%;
  }
  
  .links hr {
    border-color: #515151 !important;
    margin-top: 4px;
	margin-bottom: 8px;
	margin-left: 0;
	width: 100%;
  }

</style>

<?php
  $style = ob_get_contents();
  ob_end_clean();
?>

<?php
  include "header.php"
?>

<section class="row">
  <div class="col-xs-12">
    <h1>About Monospark</h1>
	<hr />
  </div>
</section>

<section class="row">
  <div class="col-xs-12">
    <h1>The Team</h1>
	<hr />
  </div>
  <div class="col-lg-offset-2 col-lg-4">
    <img src="/monospark-logo-small-flat.png" />
  </div>
  <div class="col-xs-4">
	<h2>Christopher Schnick</h2>
	<div class="links">
	  <p><a href="mailto:c.schnick@monospark.org">Email</a></p>
	  <hr />
	  <p><a href="https://linkedin.com/in/milchshakee">Linkedin profile</a></p>
	  <hr />
	  <p><a href="https://github.com/milchshakee">@milchshakee</a> on GitHub</p>
	  <hr />
	  <p><a href="https://twitter.com/milchshakee">@milchshakee</a> on Twitter</p>
	  <hr />
	  <p><a href="irc://chat.freenode.net/monospark">milchshakee</a> on freenode</p>
	</div>
  </div>
</section>

<?php
  include "footer.php"
?>