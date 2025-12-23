<?php
require_once 'config/db.php';

$statusMessage = '';

if (isset($_POST['bulk_delete_submit'])) {
  if (
    $_SERVER['REQUEST_METHOD'] === 'POST'
    && isset($_POST['checked_id'])
    && is_array($_POST['checked_id'])
    && count($_POST['checked_id']) > 0
  ) {
    $ids = array_map('intval', $_POST['checked_id']);
    $ids_string = implode(',', $ids);
    $sql = "DELETE FROM tbl_students WHERE id IN ($ids_string)";
    $result = mysqli_query($connection, $sql);

    if ($result) {
      $statusMessage = 'Selected students have been deleted!';
      header("Location: /php-crud");
      exit;
    } else {
      $statusMessage = 'Some problem occurred!';
    }
  } else {
    $statusMessage = 'Select at least 1 student to delete.';
  }
}
