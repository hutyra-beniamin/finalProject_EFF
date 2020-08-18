<?php
require_once './db_connect.php';
if (isset($_POST['table'])) {
  $table = $_POST['table'];
  unset($_POST['table']);
} else {
  die("No table submitted!");
}
$keys = join(", ", array_keys($_POST));
$values = join(", ", array_map(fn($v) => "'" . str_replace("'", "\'", $v) . "'", array_values($_POST))); //escapes quotation marks and adds prefix and suffix quotation marks
$sql = "INSERT INTO `$table` ($keys) VALUES ($values);";
if ($connect->query($sql) === true) {
  echo  "Successfully inserted!";
} else {
  echo "Error while updating record : " . $connect->error;
  exit;
}
$connect->close();