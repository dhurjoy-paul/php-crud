<?php
require_once "config/db.php";

$start = 0;
$rows_per_page = 5;

$sql_for_num = "SELECT * FROM tbl_students";
$result_for_num = $connection->query($sql_for_num);
$total_num_rows = mysqli_num_rows($result_for_num);

// calculation for page number
$pages = ceil($total_num_rows / $rows_per_page);

if (isset($_GET['page-num'])) {
  $page = $_GET['page-num'] - 1;
  $start = $page * $rows_per_page;
}

$sql = "SELECT * FROM tbl_students LIMIT $start, $rows_per_page";
$result = $connection->query($sql);

if (!$result) {
  die("Invalid query: " . $connection->error);
}
