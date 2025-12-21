<?php
require_once "../config/db.php";

$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] === "GET") {

  if (!isset($_GET["id"])) {
    header("Location: /php-crud");
    exit;
  }

  $id = (int) $_GET["id"];

  do {
    if (empty($id)) {
      $errorMessage = "Invalid student ID!";
      break;
    }

    $sql = "DELETE FROM tbl_students WHERE id=$id";
    $result = $connection->query($sql);

    if (!$result) {
      $errorMessage = "Invalid query: " . $connection->error;
      break;
    }

    header("Location: ../index.php");
    exit;
  } while (false);
}
