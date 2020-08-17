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
<h1>Termine</h1>

<p> Termine
</p>

</div>
<br><hr>


<?php
require_once 'templates/footer.php';
?>