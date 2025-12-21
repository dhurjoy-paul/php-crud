<?php
$hostdb = "localhost";
$userdb = "root";
$passdb = "";
$namedb = "db_student";

$connection = new mysqli($hostdb, $userdb, $passdb, $namedb);

if ($connection->connect_error) {
    die("Database connection failed: " . $connection->connect_error);
}
