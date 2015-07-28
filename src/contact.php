<?php
  $title = "Title";
  $description = "Description";
?>

<?php
  ob_start();
?>

<style>

  p {
    color: #444;
  }
  
  h1 {
    color: #3366cc !important;
    font-size: 34px !important;
  }
  
  hr {
    border-color: #3366cc !important;
  }

  .row {
    padding-top: 1.5em;
  }
  
  .fa-envelope {
    vertical-align: 8% !important;
  }

  #contact-monospark {
    padding-top: 2em;
	padding-bottom: 4.2em;
  }

  #contact-monospark p {
    margin-bottom: 2em !important;
  }
  
  #contact-form {
    padding-right: 3em;
  }

  div.form-group {
    margin-bottom: 1.5em;
  }

  textarea {
    resize: none;
  }

</style>

<?php
  $style = ob_get_contents();
  ob_end_clean();
?>

<?php
  include "header.php"
?>

<section class="container" id="contact-monospark">
  <h1 class="text-center">Contact Monospark</h1>
  <hr />
  <div class="row">
    <div class="col-md-7" id="contact-form">
      <form>
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
          <label for="subject">Subject</label>
          <input type="text" class="form-control" id="subject">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" rows="14" id="message"></textarea>
        </div>
		<div class="form-group">
          <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-envelope"></i> Submit</button>
        </div>
      </form>
	</div>
    <div class="col-md-5">
	  <h4>Project specific questions</h4>
	  <p>Need some help with a specific Monospark project? You can find help at the Monospark forums (link).</p>
	  <h4>Project specific issues</h4>
	  <p>Want to report an issue of a specific Monospark project? You can report issues at the issue tracker of the project.</p>
	  <h4>Imprint</h4>
	  <p>Are you looking for the imprint of this website? You can view it here (link)</p>
	</div>
  </div>
</section>

<?php
  include "footer.php"
?>