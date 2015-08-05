<?php
  $title = "Projects &#183; Monospark";
  $description = "An overview over all projects developed by Monospark.";
?>

<?php
  ob_start();
?>

<style>

  section {
    height: 900px;
  }

  p {
	text-align: center;
  }

  h3 {
    text-align: center;
    margin-bottom: 0.5em !important;
  }

  ul {
    padding-left: 15%;
  }
  
  #more-to-come img {
    height: 140px;
  }

  .list-group-item {
    padding-left: 2em !important;
	padding-right: 2em !important;
	border-radius: 2px !important;
    box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.75);
  }
  
  .list-group-item hr {
    border-color: #777 !important;
  }
  
  .list-group-item img {
    padding: 1.2em;
    max-width: 100%;
  }

</style>

<?php
  $style = ob_get_contents();
  ob_end_clean();
?>

<?php
  include "../header.php"
?>

<section class="row">
  <div class="col-xs-12">
    <h1>Projects</h1>
    <hr />
  </div>
  <div class="col-md-6 col-xs-12" id="geometrix">
	<div class="list-group">
      <div class="list-group-item">
		<a href="geometrix/"><img src="geometrix/geometrix-logo-big.png" class="img-rounded center-block" /></a>
		<p class="list-group-item-text">A powerful geometry library written in Java. Enter more text here...</p>
	    <hr />
	    <h3 class>Subprojects</h3>
		<ul>
		  <li><a href="">Geometrix-Gson</a> (Gson (link) support for Geometrix)</li>
		  <li><a href="">Geometrix-Jackson</a> (Jackson (link) support for Geometrix)</li>
		</ul>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xs-12" id="more-to-come">
	<div class="list-group">
      <div class="list-group-item">
		<img src="/apple-touch-icon.png" class="img-rounded center-block" />
		<p class="list-group-item-text">It takes some time to develop new projects. Since Monospark was recently created, there isn't much to see on this project page. But you can expect more projects soon&#153;!</p>
      </div>
    </div>
  </div>
</section>

<?php
  include "../footer.php"
?>