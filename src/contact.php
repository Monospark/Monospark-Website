<?php
  $title = "Contact &#183; Monospark";
  $description = "Contact Monospark.";
?>

<?php
  ob_start();
?>

<style>
  .fa-envelope {
    vertical-align: 8% !important;
  }

  #contact-monospark p {
    margin-bottom: 2em !important;
  }

  #contact-form input {
    box-shadow: 0px 1px 4px 0px rgba(50,50,50,0.2);
  }
  
  #contact-form textarea {
    box-shadow: 0px 1px 4px 0px rgba(50,50,50,0.2);
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

<section class="row" id="contact-monospark">
  <div class="col-xs-12">
    <h1 class="text-center">Contact Monospark</h1>
    <hr />
  </div>
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
        <textarea class="form-control" rows="16" id="message"></textarea>
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
	<p>Are you looking for the imprint of this website? You can view it <a href="/imprint.php">here</a></p>
  </div>
</section>

<?php
  include "footer.php"
?>