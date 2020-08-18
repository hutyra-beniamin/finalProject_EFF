<?php
ob_start();
session_start();
require_once 'templates/header.php';

if ( isset($_SESSION['user' ])!="" ) {
    require_once 'templates/admin.php';
   }

require_once 'templates/nav.php';  
?>

<div class= "container container-fluid">
<h1>Contact</h1>

<form action="contact_backend.php" method="POST">
  <div class="form-group">
    <label for="name">Vorname</label>
    <input type="text" class="form-control" name="name" id="name">
  </div>
  <div class="form-group">
    <label for="surname">Nachname</label>
    <input type="text" class="form-control" name="surname" id="surname">
  </div>
  <div class="form-group">
    <label for="message">Nachricht</label>
    <textarea class="form-control" name="message" id="message" rows="10"></textarea>
  </div>
  <div class="form-group">
    <label for="email">Name</label>
    <input type="text" class="form-control" id="email" name="email">
  </div>
  <button type="submit" class="btn btn-outline-secondary">Submit</button>
</form>

</div>
<br><hr>


<?php
require_once 'templates/footer.php';
?>