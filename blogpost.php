<?php
ob_start();
session_start();
require_once 'templates/header.php';

if ( isset($_SESSION['user' ])!="" ) {
    require_once 'templates/admin.php';
   }

require_once 'templates/nav.php';  

require_once 'RESTful.php';
$url = 'https://www.oekonews.at/oekonews.xml';
$response = curl_get($url);
$xml = simplexml_load_string($response);
$id = $_GET["id"];
$id = (int)$id;
?>

<div class="container container-fluid">
       <div class="row mt-4">
       

<?php
echo '
<div class="col-sm-12 col-md-7 mt-4">
       <div class="card">
              <div class="card-body">
              <h1>'.$xml->channel->item[$id]->title.'</h1>
              <p>'.$xml->channel->item[$id]->pubDate.'</p>
              <br><hr><br>
              <p>'.$xml->channel->item[$id]->description.'</p>
              <a href="'.$xml->channel->item[$id]->link.'" target="_blank">Weiterlesen</a>
              </div>
       </div> 
</div> '
?>


<div class="col-sm-12 col-md-5 mt-4">
        <div class="card offset-sm-0 offset-md-2">
        <h3>Aktuelle Beiträge</h3>
        <p><?php
       foreach ($xml->channel->item as $item) {
       echo '<a href="'.$item->link.'" target="_blank">'.$item->title.'</a><br>';
       }
       ?><p>
       </div>
</div>

</div>
</div>


<?php
require_once 'templates/footer.php';
?>

