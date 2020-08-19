<?php
ob_start();
session_start();
require_once 'dbconnect.php';
require_once 'templates/header.php';

if ( isset($_SESSION['user' ])!="" ) {
    require_once 'templates/admin.php';
   }

require_once 'templates/nav.php';  
?>

<div class= "container container-fluid">
<h1>Diese Unternehmerinnen & Unternehmer sind bereits Teil von #EntrepreneursForFuture:</h1>


<?php
$sql = "SELECT * FROM `entrepreneure`";
$result = $connect->query($sql);
?>

<table class="table table-bordered mt-4" cellspacing= "0" cellpadding="0">
       <thead>
           <tr class="pb-4">
               <th>Name</th>
               <th>Unternehmen</th>
               <th>Standort</th>
               <th>Land</th>   
               </th>
            </tr>
        </thead>
        <tbody>


<?php
$sql = "SELECT * FROM `entrepreneure`";
$result = $connect->query($sql);
if($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
$name = $row["name"];
$company = $row["company"];
$url = $row["url"];
$address = $row["city"];
$country = $row["country"];
echo "<tr>
        <td> $name </td>
        <td><a href='$url' target='_blank'>$company</a></td>
        <td>$address</td>
        <td>$country</td>
        </tr>";
}}?>
        
        </tbody>
    </table>
</div>

<br><hr>



<?php
require_once 'templates/footer.php'; 
?>

