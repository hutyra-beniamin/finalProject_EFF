<?php
ob_start();
session_start();
require_once 'dbconnect.php';
require_once 'templates/header.php';

if (isset($_SESSION['user']) != "") {
    require_once 'templates/admin.php';
}
require_once 'templates/nav.php';
?>

<div class="container container-fluid">
    <?php
    if (isset($_SESSION['user']) != "") {
        include 'templates/add_event.php';
    }
    ?>

<div class= "container container-fluid">
<div class ="col-sm-12 col-md-10">
    <h1 class="ml-4">Termine</h1>
    <table class="table table-bordered mt-4" cellspacing="0" cellpadding="0">
        <thead>
            <tr class="pb-4">
                <th>Titel</th>
                <th>Zeitpunkt</th>
                <th>Beschreibung</th>
                <th>Ort</th>
                <?php if (isset($_SESSION['user']) != "") echo "<th>Optionen</th>" ?>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM `events`";
            $result = $connect->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $id = $row["id"];
                    $title = $row["title"];
                    $date = $row["date"];
                    $time = $row["time"];
                    $description = $row["description"];
                    $place = $row["place"];
                    echo "<tr>
                        <td>$title</td>
                        <td>$date $time</td>
                        <td>$description</td>
                        <td>$place</td>";
                    if (isset($_SESSION['user']) != "") echo '<td><button class="btn btn-outline-secondary update" type="button" data-id="' . $id . '">Ändern</button><button class="btn btn-outline-danger ml-2" type="submit" form="delete" name="delete_value" value="' . $id . '">Löschen</button></td>';
                    echo "</tr>";
                }
            } ?>
        </tbody>
    </table>
</div>
</div>
</div>
<br>
<hr>
<form action="./db_delete_general.php" method="POST" id="delete">
    <input type="hidden" name="table" value="events">
    <input type="hidden" name="delete_key" value="id">
</form>
<?php
require_once 'templates/footer.php';
require 'templates/update_event.php';
?>