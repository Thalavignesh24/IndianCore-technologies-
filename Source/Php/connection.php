<?php

$hostname="127.0.0.1";
$username="root";
$password="root";
$dbname="test";

$conn = mysqli_connect($hostname,$username,$password,$dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>