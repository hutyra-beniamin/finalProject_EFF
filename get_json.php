<?php
//header("Content-type: application/json");
require_once "./dbconnect.php";
if (isset($_GET['table'])) {
  $table = $_GET['table'];
  unset($_GET['table']);
} else {
  die("No table submitted!");
}
if (isset($_GET['filter'])) {
  $filter = $_GET['filter'];
  unset($_GET['filter']);
}
if (isset($_GET['distinct'])) {
  $distinct = $_GET['distinct'];
  unset($_GET['distinct']);
}
function get_where_clause() {
  $where_clause_array = [];
  foreach ($_GET as $key => $value) {
    array_push($where_clause_array, "$key = $value");
  }
  if (count($where_clause_array) > 0) {
    return " WHERE " . join(" AND ", $where_clause_array);
  }
}
$result = $connect->query("SELECT " . ($distinct ? "DISTINCT $distinct" : "*") . " FROM $table" . get_where_clause());
if ($result->num_rows > 0) {
  while ($media = $result->fetch_object()) {
    $media_array[] = $media;
  }
}
if ($media_array != null) {
  echo json_encode($media_array);
} else {
  echo "[]";
}
?>