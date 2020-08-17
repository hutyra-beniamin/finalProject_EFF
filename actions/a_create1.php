<?php
ob_start();
session_start();
require_once '../dbconnect.php';
require_once 'header.php';
// require_once '../templates/header.php';

if ( isset($_SESSION['user' ])!="" ) {
    require_once '../templates/admin.php';
   }

require_once '../templates/nav.php';  
?>

<div class="container container-fluid">
 <div class="row">

<?php
$error = false;
if ($_POST) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $company = $_POST["company"];
    $status = $_POST["status"];
    $url = $_POST["website"];
    $address = $_POST["city"];
    $country = $_POST["country"];

 //basic email validation
 if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
    $error = true;
    $emailError = "Please enter valid email address." ;
   } else {
    // checks whether the email exists or not
    $query = "SELECT email FROM entrepreneure WHERE email='$email'";
    $result = mysqli_query($connect, $query);
    $count = mysqli_num_rows($result);
    if($count!=0){
     $error = true;
     $emailError = "Es gibt schon einen Eintrag mit dieser Email-Adresse. ";
    }
   }
   if(!$error){
    $sql = "INSERT INTO `entrepreneure` (`firstname`, `lastname`, `email`, `company`, `status`, `website`, `city`, `country`) VALUES ('$firstname', '$lastname', '$email', '$company', '$status', '$url', '$address', '$country')";
   if($connect->query($sql) === TRUE) {
       echo "<h2>Vielen Dank für Dein Engagement!</h2>" ;
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
   }else {
       echo $emailError;
   }
   
}

?>

</div>
<a class="btn btn-dark" type='button' role="button" href='../unterzeichnen.php?#1'>Zurück</a>
<a class="btn btn-primary" type='button' role="button" href='../members.php'>Alle Unterzeichner*innen</a>
</div>

</body>
</html>