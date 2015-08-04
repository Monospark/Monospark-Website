<?php
  $title = "Monospark";
  $description = "Awesome open source projects for everyone.";
?>

<?php
  ob_start();
?>

<style>
  header {
    color: #f2f2f2 !important;
    background: #272727;
	padding: 3em 2em 5em;
	border-radius: 2px;
	box-shadow: 0px 3px 6px 0px rgba(50,50,50,0.5);
	margin-bottom: 1.2em;
  }
  
  header img {
    float: left;
	size: auto;
	margin-right: 1.5em;
  }
  
  @media (max-width: 1200px) {
    header {
	  text-align: center;
	}
	
	header img {
	  display: none;
	}
  }
  
  @media (max-width:767px) {
    header h1 {
      font-size: 37px !important;
	  margin-bottom: 0.5em !important;
    }
  
    header h3 {
      font-size: 16px !important;
      line-height: 24px !important;
    }
	
	header a {
      margin-top: 0.75em;
    }
  }
  
  @media (min-width:768px) {
    h1 {
      font-size: 50px !important;
	  margin-bottom: 0.5em !important;
    }
  
    h3 {
      font-size: 22px !important;
      line-height: 30px !important;
    }
	
	header a {
      margin-top: 1.4em;
    }
  }
  
  #big-logo {
    padding-top: 1.5em;
  }

  .carousel {
    height: 300px;
	margin-top: 4em !important;
  }
  
  .carousel .item {
    height: 300px;
  }
  
  .carousel .item img {
    max-width: 100%;
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
  }
  
  .carousel-control:hover {
	color: #515151 !important;
  }
  
  .carousel-inner {
    padding-left: 15%;
	padding-right: 15%;
	text-align: center;
  }
  
  .carousel-inner img {
	margin-bottom: 1.2em !important;
  }
  
  .carousel-inner p {
	margin-top: 2em;
  }
  
</style>

<?php
  $style = ob_get_contents();
  ob_end_clean();
?>

<?php
  include "header.php"
?>

<header class="row">
  <img id="big-logo" src="monospark-logo-small-flat.png" />
  <h1>Awesome Open Source projects from developers, for developers.</h1>
  <h3>Consisting entirely out of voluntary developers, Monospark creates and maintains many Open Source projects ranging from java geometry libraries to minecraft server plugins.</h3>
  <a class="btn btn-primary btn-lg" href="/projects/" role="button">Explore our projects</a>
</header>

<section class="row">
  <div class="col-xs-12">
    <h1>Why you'll love Monospark</h1>
    <hr />
  </div>
  <div class="col-xs-12 col-md-6">
    <h3><i class="fa fa-code-fork"></i> Contribution made easy</h3>
	<p>Every Monospark project is making it easy to get involved and contribute to them. From simply fixing errors in the user documentation to adding large chunks of code to a project, every contribution is welcome.</p>
  </div>
  <div class="col-xs-12 col-md-6">
    <h3><i class="fa fa-comments"></i> Strong community</h3>
	<p>Monospark has a friendly and helpful community. You need help with something? The forums (link) are a great place to find a solution. If you want to chat with us, you can vist our IRC Channel (#Monospark on freenode) (link).</p>
  </div>
</section>

<section class="row">
  <div class="col-xs-12">
    <h1>Featured Projects</h1>
    <hr />
  </div>
  <div id="feature-carousel" class="col-xs-12 carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#feature-carousel" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
	    <img class="first-slide center-block" src="/projects/geometrix/geometrix-logo-big.png" />
            <h4>A powerful geometry library written in Java.</h4>
            <p><a class="btn btn-lg btn-default" href="/projects/geometrix/" role="button">Learn more</a></p>
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
</section>

<?php
  include "footer.php"
?>