<?php
ob_start();
session_start();
require_once 'dbconnect.php';
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
    <h1 class="ml-4">Sustainable Business News</h1>
    <div class="row mt-4">
        <div class="col-sm-12 col-md-6">
            <?php
            $sql = "SELECT * FROM `posts`";
            $result = $connect->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $id = $row["id"];
                    $title = $row["title"];
                    $post = $row["post"];
                    $user = $row["user"];
                    $timestamp = $row["timestamp"];
                    echo "<div class='card px-4'>
                        <div class='card-body'>
                        <h5 class='card-title'>$title</h5>
                        <p>" . strftime("%d.%m.%Y %H:%M", strtotime($timestamp)) . "</p>
                        <p>" . $post . "</p>";
                    if (isset($_SESSION['user']) != "") echo '<button class="btn btn-outline-secondary update" type="button" data-id="' . $id . '">Ändern</button><button class="btn btn-outline-danger ml-2" type="submit" form="delete" name="delete_value" value="' . $id . '">Löschen</button>';
                    echo "</div></div>";
                }
            }
            ?>
        </div>
        <div class="col-sm-12 col-md-6">
            <?php
            $i = 0;
            foreach ($xml->channel->item as $item) {
                echo '<div class="card px-4">
                    <div class="card-body">
                        <a href="blogpost.php?id=' . $i . '"><h5 class="card-title">' . $item->title . '</h5></a>
                        <p>' . $item->pubDate . '</p>
                        <p>' . $item->description . '</p>
                    </div>
                </div>';
                $i++;
                if ($i == 5) break;
            }
            ?>
        </div>


    </div>
</div>
<form action="./db_delete_general.php" method="POST" id="delete">
    <input type="hidden" name="table" value="posts">
    <input type="hidden" name="delete_key" value="id">
</form>

<br><hr>

<?php
require_once 'templates/footer.php';
require 'templates/update_post.php';
?>