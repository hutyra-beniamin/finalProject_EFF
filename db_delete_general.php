<?php
require_once './dbconnect.php';
if (isset($_POST['table'])) {
  $table = $_POST['table'];
  unset($_POST['table']);
} else {
  die("No table submitted!");
}
if (isset($_POST['delete_key'])) {
  $delete_key = $_POST['delete_key'];
  unset($_POST['delete_key']);
} else {
  die("No delete key submitted!");
}
if (isset($_POST['delete_value'])) {
  $delete_value = $_POST['delete_value'];
  unset($_POST['delete_value']);
} else {
  die("No delete value submitted!");
}
$sql = "DELETE FROM `$table` WHERE `$delete_key` = '$delete_value'";
if ($connect->query($sql) === true) {
  header('Location: ' . $_SERVER["HTTP_REFERER"]);
} elseif ($connect->errno == 1451) {
  die("Error: $delete_key is connected to a foreign key of another table!");
} else {
  die("Error while deleting record : " . $connect->error);
}
$connect->close();
?>
