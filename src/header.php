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
	
	<style>
  	  .navbar-brand {
        height: 70px !important;
        padding: 16px !important;
      }

      .navbar-brand:hover {
        padding: 15px !important;
      }

      .navbar-toggle {
        margin-top: 17px !important;
      }

      .navbar-nav {
        margin-top: 8px !important;
      }

      .navbar a {
        font-size: 150%;
        color: #4a4a4a !important;
      }

      .navbar a:hover {
        color: #3366cc !important;
      }
	
	  .fa-list-alt {
	    vertical-align: -5% !important;
	  }
	  
      .navbar {
        margin-bottom: 0 !important;
        background: #f2f2f2 !important;
        border-color: #dfdfdf !important;
      }
	</style>

	<link rel="icon" type="image/png" href="/favicon.png">
	
	<link rel="apple-touch-icon" type="image/png" href="/apple-touch-icon.png">
	
	<link rel="stylesheet" href="/css/style.css">
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
  </head>
  <body>
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  <a href="https://monospark.org">
		    <img src="monospark_logo_big.svg" class="navbar-brand" />
		  </a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav navbar-right">
		    <li><a href="/projects.php"><i class="fa fa-list-alt"></i> Projects</a></li>
            <li><a href="https://forums.monospark.org"><i class="fa fa-users"></i> Forums</a></li>
            <li><a href="/contact.php"><i class="fa fa-comment"></i> Contact</a></li>
            <li><a href="/about.php"><i class="fa fa-info-circle"></i> About</a></li>
          </ul>
        </div>
      </div>
    </nav>