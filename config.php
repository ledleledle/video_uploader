<?php
$connection = mysqli_connect('localhost', 'root', 'Edibawer21');
if (!$connection){
	die("Koneksi Database gagal!" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'video_uploader');
if (!$select_db){
	die("Koneksi Database gagal!" . mysqli_error($connection));
}