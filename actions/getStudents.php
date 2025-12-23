<?php
require_once "config/db.php";

$searchedText = "";
$sql = "";

// var for pagination
$start = 0;
$rows_per_page = 5;

$sql_for_num = "SELECT * FROM tbl_students";
$result_for_num = $connection->query($sql_for_num);
$total_num_rows = mysqli_num_rows($result_for_num);

// calculation for total page count
$pages = ceil($total_num_rows / $rows_per_page);

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['page_num'])) {
  $page = $_GET['page_num'] - 1;
  $start = $page * $rows_per_page;
  // echo "$start";
  $sql = "SELECT * FROM tbl_students LIMIT $start, $rows_per_page";
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $sql = "SELECT * FROM tbl_students LIMIT $start, $rows_per_page";
} elseif (isset($_POST['searchedText'])) {
  $searchedText = $_POST["searchedText"];
  if (empty($searchedText)) {
    exit;
  }
  $sql = "SELECT * FROM tbl_students WHERE id LIKE '%$searchedText%' OR name LIKE '%$searchedText%' OR email LIKE '%$searchedText%'";
  // $sql_for_search = "SELECT * FROM tbl_students WHERE id LIKE '%$searchedText%' OR name LIKE '%$searchedText%' OR email LIKE '%$searchedText%'";
  // $result = mysqli_query($connection, $sql_for_search);
  // $num_of_searched = mysqli_num_rows($result);

  // $pages = ceil($num_of_searched / $rows_per_page);
} else {
  $sql = "SELECT * FROM tbl_students LIMIT $start, $rows_per_page";
}

$result = mysqli_query($connection, $sql);
$num = mysqli_num_rows($result);

if (!$result) {
  die("Invalid query: " . $connection->error);
}
