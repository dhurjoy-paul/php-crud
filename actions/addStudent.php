<?php
require_once "config/db.php";

$name = "";
$email = "";
$phone = "";
$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];

  do {
    if (empty($name) || empty($email) || empty($phone)) {
      $errorMessage = "All the fields are required!";
      break;
    }

    // add new client to database
    $sql = "INSERT INTO tbl_students (name, email, phone)" . "VALUES ('$name', '$email', '$phone')";
    $result = $connection->query($sql);

    if (!$result) {
      $errorMessage = "Invalid query: " . $connection->error;
      break;
    }

    $name = "";
    $email = "";
    $phone = "";
    $successMessage = "Student added successfully!";

    header("location: /php-crud");
    exit;
  } while (false);
}
