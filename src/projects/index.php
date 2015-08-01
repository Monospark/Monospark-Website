<?php
  $title = "Title";
  $description = "Description";
?>

<?php
  ob_start();
?>

<style>
  p {
    color: #1a1a1a;
  }
  
  h1 {
    color: #3366cc !important;
    font-size: 34px !important;
	text-align: center;
  }
  
  hr {
    border-color: #3366cc !important;
  }
  
  a.list-group-item {
    padding: 10px 10px !important;
  }
  
  .list-group-item {
    overflow: hidden;
  }

  .list-group-item img {
    float: left;
	width: 100px;
	height: 100px;
	margin-right: 1em;
  }
  
  .list-group-item h4 {
    display: inline;
  }
  
  .list-group-item p {
	margin-top: 0.4em;
  }
</style>

<?php
  $style = ob_get_contents();
  ob_end_clean();
?>

<?php
  include "../header.php"
?>

<section class="container">
  <h1>Projects</h1>
  <hr />
  <div class="row">
    <div class="col-md-6 col-xs-12">
      <div class="list-group">
        <a href="geometrix/" class="list-group-item">
	      <img src="geometrix/geometrix-logo-small.png" class="img-rounded" />
          <h4>Geometrix</h4>
          <p class="list-group-item-text">A powerful geometry library written in Java.</p>
        </a>
      </div>
	</div>
    <div class="col-md-6 col-xs-12">
      <div class="list-group">
        <a href="/" class="list-group-item">
	      <img src="/apple-touch-icon.png" />
          <h4>More to come!</h4>
          <p class="list-group-item-text">It takes some time to develop new projects. Since Monospark was recently created, there isn't much to see on this project page. But you can expect more projects soon&#153;!</p>
        </a>
      </div>
	</div>
  </div>
</section>

<?php
  include "../footer.php"
?>