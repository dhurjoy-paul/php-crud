<?php
require_once "config/db.php";

$searchedText = "";
$sql = "";

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $sql = "SELECT * FROM tbl_students";
} else {
  $searchedText = $_POST["searchedText"];
  // error_log($searchedText);
  // echo "$searchedText";
  if (empty($searchedText)) {
    exit;
  }
  $sql = "SELECT * FROM tbl_students WHERE id = '$searchedText' OR name= '$searchedText' OR email= '$searchedText'";

  echo "$sql";
}
$result = mysqli_query($connection, $sql);
$num = mysqli_num_rows($result);
// echo $num;

if (!$result) {
  die("Invalid query: " . $connection->error);
}
