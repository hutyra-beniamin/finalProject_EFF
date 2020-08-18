<?php
require_once './dbconnect.php';
if (isset($_POST['table'])) {
  $table = $_POST['table'];
  unset($_POST['table']);
} else {
  die("No table submitted!");
}
if (isset($_POST['update_key'])) {
  $update_key = $_POST['update_key'];
  unset($_POST['update_key']);
} else {
  die("No update key submitted!");
}
if (isset($_POST['update_value'])) {
  $update_value = $_POST['update_value'];
  unset($_POST['update_value']);
} else {
  die("No update value submitted!");
}
foreach ($_POST as $key => $value) {
  $set_clause[] = "$key = '" . str_replace("'", "\'", $value) . "'";
}
$sql = "UPDATE `$table` SET " . join(", ", $set_clause) . " WHERE $update_key = '$update_value'";
if ($connect->query($sql) === true) {
  echo  "Successfully updated!";
} else {
  echo "Error while updating record : " . $connect->error;
  exit;
}
$connect->close();
?>