<?php
  $title = "Title";
  $description = "Description";
?>

<?php
  ob_start();
?>

<style>

  #header {
    background: url(grid.png);
	padding-top: 2em;
	padding-bottom: 1.5em;
  }
  
  #logo {
	margin-bottom: 1.5em;
  }

  #features {
	margin-top: 2.5em;
  }
  
  #get-geometrix {
    margin-top: 3em;
  }

  #get-geometrix a {
    margin-top: 0.5em;
  }
  
  #quick-links {
    margin-top: 3.5em;
  }
  
  #quick-links h3 {
    margin-bottom: 0.5em;
  }
  
  .fa-code {
    vertical-align: 6% !important;
  }
  
  .fa-suitcase {
    vertical-align: 11% !important;
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
  <img class="center-block img-responsive" id="logo" src="geometrix-logo.png" id="logo" alt="Geometrix logo" />
  <h4 class="text-center">A powerful geometry library written in Java.</p>
</section>

<main class="container text-center">

<section id="features">
  <h1>Features</h1>
  <hr />
  <div class="row">
    <div class="col-xs-12 col-sm-4">
      <h3><i class="fa fa-suitcase"></i> Feature packed</h3>
	  <p>There are implementations of all common geometric objects and plenty of helper methods, which allow you to do everything you want with geometric objects.</p>
	</div>
    <div class="col-xs-12 col-sm-4">
      <h3><i class="fa fa-paper-plane"></i> Easy to use</h3>
	  <p>Geometrix is easy to use and understand. The code is clean, efficient, fully documented, and completely thread-safe.</p>
	</div>
    <div class="col-xs-12 col-sm-4">
      <h3><i class="fa fa-lock"></i> Robust</h3>
	  <p>Geometrix has unique ways of dealing with floating-point inaccuracy and rounding errors so they can no longer create unnecessary bugs.</p>
	</div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-4">
      <h3><i class="fa fa-sort"></i> Flexible</h3>
	  <p>Geometrix provides a unique dimension handling system (link), which makes it possible to use Geometrix objects in all possible dimensions.</p>
	</div>
    <div class="col-xs-12 col-sm-4">
      <h3><i class="fa fa-github-square"></i> Open Source</h3>
	  <p>Geometrix is licensed under the MIT License (link). You can visit the GitHub repository (link) to check the state of Geometrix, report issues, or contribute code.</p>
	</div>
    <div class="col-xs-12 col-sm-4">
      <h3><i class="fa fa-cogs"></i> JSON support</h3>
	  <p>All Geometrix objects can be serialized to JSON and deserialized from JSON using Jackson (link) or Gson (link).</p>
	</div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-4">
      <h3><i class="fa fa-rocket"></i> Fast</h3>
	  <p>Geometrix keeps the amount of executed calculations at a minimum to be as fast as it can possibly get.</p>
	</div>
    <div class="col-xs-12 col-sm-4">
      <h3><i class="fa fa-code"></i> Modern codebase</h3>
	  <p>Geometrix targets Java 8 and makes heavy use of the newly added Java 8 features like Optionals.</p>
	</div>
    <div class="col-xs-12 col-sm-4">
      <h3><i class="fa fa-book"></i> Documented</h3>
	  <p>Geometrix has a complete user documentation (link) which leaves no questions unanswered.</p>
	</div>
  </div>
</section>

<section id="get-geometrix">
  <h1>Get Geometrix</h1>
  <hr />
  <div class="row">
    <div class="col-xs-12 col-sm-6">
	  <h3>Releases</h3>
	  <p>All releases of Geometrix including the source and JavaDoc can be found at the downloads page. Information on how to add Geometrix as a dependency with a build tool can be found there as well.</p>
	  <a class="btn btn-primary" role="button" href=""><i class="fa fa-download"></i> Geometrix Download Page</a>
	</div>
    <div class="col-xs-12 col-sm-6">
	  <h3>Development builds</h3>
	  <p>Development builds can be used for testing newly added features or getting early access to bug fixes which are not yet included in a release. Note that development builds can be broken or lack certain features.</p>
	  <a class="btn btn-default" href=""><i class="fa fa-exclamation-triangle"></i> Browse development builds</a>
	</div>
  </div>
</section>

<section id="quick-links">
  <h1>Quick Links</h1>
  <hr />
  <div class="row" id="downloads">
    <div class="col-xs-12 col-sm-4">
	  <h3>Getting started</h3>
	  <ul class="list-unstyled">
	    <li><a href="https://github.com/monospark/geometrix"><span class=" glyphicon glyphicon-menu-right"></span> Documentation</a></li>
	    <li><a href="https://github.com/monospark/geometrix/issues"><span class=" glyphicon glyphicon-menu-right"></span> JavaDoc</a></li>
	  </ul>
	</div>
    <div class="col-xs-12 col-sm-4">
	  <h3>About</h3>
	  <ul class="list-unstyled">
	    <li><a href="https://github.com/monospark/geometrix"><span class=" glyphicon glyphicon-menu-right"></span> License</a></li>
	    <li><a href="https://github.com/monospark/geometrix/issues"><span class=" glyphicon glyphicon-menu-right"></span> Forums</a></li>
	  </ul>
	</div>
    <div class="col-xs-12 col-sm-4">
	  <h3>Contributing</h3>
	  <ul class="list-unstyled">
	    <li><a href="https://github.com/monospark/geometrix"><span class=" glyphicon glyphicon-menu-right"></span> GitHub Project</a></li>
	    <li><a href="https://github.com/monospark/geometrix/issues"><span class=" glyphicon glyphicon-menu-right"></span> Issue Tracker</a></li>
	  </ul>
	</div>
  </div>
</section>

</main>

<?php
  include "footer.php"
?>