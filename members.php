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
<div class ="col-sm-12 col-md-10">

<h1>Unternehmerinnen & Unternehmer</h1>
<p>die sich als Entrepreneurs For Future engagieren und die Stellungnahme unterzeichnet haben</p>
<br>

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
$firstname = $row["firstname"];
$lastname = $row["lastname"];
$company = $row["company"];
$url = $row["website"];
$address = $row["city"];
$country = $row["country"];
echo "<tr>
        <td> $firstname $lastname </td>
        <td><a href='$url' target='_blank'>$company</a></td>
        <td>$address</td>
        <td>$country</td>
        </tr>";
}}?>
        
        </tbody>
    </table>
</div>
</div>

<br><hr>



<?php
require_once 'templates/footer.php'; 
?>

