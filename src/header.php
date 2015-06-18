<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<?php
	  print '<title>'.$title.'</title>';
	  print '<meta name=description content="'.$description.'">';
	  print $style;
	?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	
	<style>
	  body {
        padding-top: 70px;
      }
	  .btn-group {
	    margin-right: 1em;
	  }
	</style>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
	    <div class="navbar-header">
		   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		    <span class="sr-only">Toggle navigation</span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="https://monospark.org">Monospark</a>
	    </div>
	    <div class="navbar-collapse collapse navbar-right">
		  <div class="btn-group" role="group" aria-label="Projects">
		    <a class="btn btn-primary navbar-btn" href="/projects" role="button">Projects</a>
            <button type="button" class="btn btn-primary navbar-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  <span class="caret"></span>
              <span class="sr-only">Toggle Dropdown</span>
		    </button>
			<ul class="dropdown-menu">
              <li><a href="/geometrix">Geometrix</a></li>
            </ul>
          </div>
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="https://forums.monospark.org">Forums</a></li>
		    <li><a href="/contact">Contact</a></li>
			<li><a href="/about">About</a></li>
	      </ul>
	    </div>
      </div>
    </nav>