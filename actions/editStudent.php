<?php
require_once "config/db.php";

$name = "";
$email = "";
$phone = "";
$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $id = $_GET["id"];

  if (!isset($id)) {
    header("location: /php-crud");
    exit;
  }

  $sql = "SELECT * FROM tbl_students WHERE id=$id";
  $result = $connection->query($sql);
  $row = $result->fetch_assoc();

  if (!$row) {
    header("location: /php-crud");
    exit;
  }

  $name = $row["name"];
  $email = $row["email"];
  $phone = $row["phone"];
} else {
  $id = (int)$_POST["id"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];

  do {
    if (empty($id) || empty($name) || empty($email) || empty($phone)) {
      $errorMessage = "All the fields are required!";
      break;
    }

    $sql = "UPDATE tbl_students 
        SET name='$name', email='$email', phone='$phone' 
        WHERE id=$id";

    $result = $connection->query($sql);

    if (!$result) {
      $errorMessage = "Invalid query: " . $connection->error;
      break;
    }

    $successMessage = "Student updated successfully!";

    header("location: /php-crud");
    exit;
  } while (false);
}
