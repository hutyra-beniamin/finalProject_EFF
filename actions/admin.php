<?php
ob_start();
require_once 'dbconnect.php';

if ( !isset($_SESSION['user' ])!="" ) {
    header("Location: index.php");
    exit;
   }

// select logged-in users details
$res=mysqli_query($connect, "SELECT * FROM users WHERE id=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>

<div class="container">
    <div class="jumbotron">
      <div class="dashboard">
      <p><?php echo $userRow['name' ]; ?><span><a  href="logout.php?logout"> Log Out</a></span></p>                          
    </div>
</div>
</div>

<?php ob_end_flush(); ?>