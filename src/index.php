<?php
  $title = "Monospark";
  $description = "Awesome open source projects for everyone.";
?>

<?php
  ob_start();
?>

<style>
  #header {
    color: #f2f2f2 !important;
    background: #272727;
	padding-top: 3em;
	padding-bottom: 5em;
  }

  @media (max-width: 1200px) {
    #header {
	  text-align: center;
	}
  }
  
  @media (max-width:768px) {
    #header h1 {
      font-size: 37px !important;
	  margin-bottom: 0.5em !important;
    }
  
    #header h3 {
      font-size: 16px !important;
      line-height: 24px !important;
    }
	
	#header a {
      margin-top: 0.75em;
    }
  }
  
  @media (min-width:769px) {
    h1 {
      font-size: 50px !important;
	  margin-bottom: 0.5em !important;
    }
  
    h3 {
      font-size: 22px !important;
      line-height: 30px !important;
    }
	
	#header a {
      margin-top: 1.4em;
    }
  }
  
  #big-logo {
    padding-top: 1.5em;
  }
  
  #why-love-monospark {
    background: #f2f2f2;
    border-top: 1px solid #dfdfdf;
	border-bottom: 1px solid #dfdfdf;
	padding-top: 3em;
	padding-bottom: 4em;
	text-align: center;
  }
  
  #featured-projects {
	padding-top: 3.5em;
	padding-bottom: 4em;
  }

  .carousel {
    height: 300px;
	margin-top: 4em !important;
  }
  
  .carousel .item {
    height: 300px;
  }
  
  .carousel .item.next {
    padding-left: 15%;
	padding-right: 15%;
  }
  
  .carousel-indicators li {
    background: #1a1a1a !important;
	border: 1px solid #1a1a1a !important;
  }
  
  .carousel-indicators li:hover {
    background: #3366cc !important;
	border: 1px solid #3366cc !important;
  }
  
  .carousel-indicators li.active {
    border: 7px solid #1a1a1a !important;
  }
  
  .carousel-control {
    opacity: 1 !important;
    background: #fff !important;
	color: #1a1a1a !important;
	text-shadow: none !important;
  }
  
  .carousel-control:hover {
	color: #3366cc !important;
  }
  
  .carousel-inner {
    padding-left: 15%;
	padding-right: 15%;
	text-align: center;
  }
  
  .carousel-inner img {
    max-width: 100%;
	margin-bottom: 1.2em !important;
  }
  
  .carousel-inner p {
	margin-top: 2em;
  }
  
  .content p {
    color: #444;
  }
  
  .content h1 {
    color: #3366cc !important;
    font-size: 34px !important;
  }
  
  .content hr {
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

<section id="header">
  <div class="container">
    <div class="row">
	  <div class="col-lg-4 hidden-md hidden-sm hidden-xs">
	    <img id="big-logo" src="monospark_logo_small_flat.png" />
	  </div>
	  <div class="col-lg-8 col-md-12">
        <h1>Awesome Open Source projects from developers, for developers.</h1>
	    <h3>Consisting entirely out of voluntary developers, Monospark creates and maintains many Open Source projects ranging from java geometry libraries to minecraft server plugins.</h3>
		<a class="btn btn-primary btn-lg" href="/projects.php" role="button">Explore our projects</a>
	  </div>
	</div>
  </div>
</section>

<section class="content" id="why-love-monospark">
  <div class="container">
	<h1 class="text-center">Why you'll love Monospark</h1>
	<hr />
    <div class="row">
      <div class="col-xs-12 col-md-6">
        <h3><i class="fa fa-code-fork"></i> Contribution made easy</h3>
	    <p>Every Monospark project is making it easy to get involved and contribute to them. From simply fixing errors in the user documentation to adding large chunks of code to a project, every contribution is welcome.</p>
	  </div>
      <div class="col-xs-12 col-md-6">
        <h3><i class="fa fa-comments"></i> Strong community</h3>
	    <p>Monospark has a friendly and helpful community. You need help with something? The forums (link) are a great place to find a solution. If you want to chat with us, you can vist our IRC Channel (#Monospark on freenode) (link).</p>
	  </div>
	</div>
  </div>
</section>

<section class="content" id="featured-projects">
  <div class="container">
    <div class="row">
	  <h1 class="text-center">Featured Projects</h1>
	  <hr />
      <div id="feature-carousel"class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#feature-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#feature-carousel" data-slide-to="1"></li>
          <li data-target="#feature-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
			  <img class="first-slide center-block" src="/geometrix/geometrix-logo.png" />
                <h4>A powerful geometry library written in Java.</h4>
                <p><a class="btn btn-lg btn-default" href="/geometrix.php" role="button">Learn more</a></p>
          </div>
          <div class="item">
			  <img class="second-slide center-block" src="/geometrix/geometrix-logo.png" />
                <h4>A powerful geometry library written in Java.</h4>
                <p><a class="btn btn-lg btn-default" href="/geometrix.php" role="button">Learn more</a></p>
          </div>
          <div class="item">
			  <img class="third-slide center-block" src="/geometrix/geometrix-logo.png" />
                <h4>A powerful geometry library written in Java.</h4>
                <p><a class="btn btn-lg btn-default" href="/geometrix.php" role="button">Learn more</a></p>
          </div>
        </div>
        <a class="left carousel-control" href="#feature-carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#feature-carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
	</div>
  </div>
</section>

<?php
  include "footer.php"
?>