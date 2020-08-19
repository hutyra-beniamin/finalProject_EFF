<?php
ob_start();
session_start();
require_once 'templates/header.php';

if (isset($_SESSION['user']) != "") {
    require_once 'templates/admin.php';
}

require_once 'templates/nav.php';

require_once 'RESTful.php';
$url = 'https://www.oekonews.at/oekonews.xml';
$response = curl_get($url);
$xml = simplexml_load_string($response);
?>

<div class="container container-fluid">
    <?php
    if (isset($_SESSION['user']) != "") {
        include 'templates/add_post.php';
    }
    ?>
    <h1>Sustainable Business News</h1>
    <div class="row mt-4">

        <?php
        $i = 0;
        foreach ($xml->channel->item as $item) {
            echo '<div class="col-sm-12 col-md-6 col-lg-34 pl-2 my-3">
<div class="card px-4">
<div class="card-body">

<a href="blogpost.php?id=' . $i . '"<h5 class="card-title">' . $item->title . '</h5></a>
<p>' . $item->pubDate . '</p>
<p>' . $item->description . '</p>

</div>
</div>
</div>';
            $i++;
            if ($i == 5) break;
        }
        ?>

    </div>
</div>

<?php
require_once 'templates/f_footer.php';
?>