<?php
ob_start();
session_start();
require_once '../dbconnect.php';
require_once '../templates/header.php';

if ( isset($_SESSION['user' ])!="" ) {
    require_once '../templates/admin.php';
   }

require_once '../templates/nav.php';  
?>

<div class="container container-fluid">
 <div class="row">

<?php
if ($_POST) {
    $name = $_POST["name"];
    $company = $_POST["company"];
    $url = $_POST["url"];
    $address = $_POST["city"];
    $country = $_POST["country"];



   $sql = "INSERT INTO `entrepreneurs`(`name`, `company`, `url`, `city`, `country`) VALUES ('$name', '$company', '$url', '$address', '$country')";
   if($connect->query($sql) === TRUE) {
       echo "<h2>Vielen Dank für Dein Engagement!</h2>" ;
    //    echo "<a href='../create.php'><button type='button'>Back</button></a>";
    //     echo "<a href='../admin.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>

</div>
<a class="btn btn-dark" type='button' role="button" href='../members.php'>Alle Unterzeichner'innen</a>
</div>

</body>
</html>