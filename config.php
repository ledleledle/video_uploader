<?php

$host = "localhost";
$user = "root";
$password = "Edibawer21";
$db = "video_uploader";

$con = mysqli_connect($host, $user, $password, $db);
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
