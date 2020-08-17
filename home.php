<?php
ob_start();
session_start();
require_once 'dbconnect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['user' ]) ) {
 header("Location: login.php");
 exit;
}
// select logged-in users details
$res=mysqli_query($connect, "SELECT * FROM users WHERE id=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome - <?php echo $userRow['email' ]; ?></title>
</head>
<body >
           Hi <?php echo $userRow['email' ]; ?>
           
           <a  href="logout.php?logout">Sign Out</a>
 
       
 
</body>
</html>
<?php ob_end_flush(); ?>