<?php

$severName = "localhost";
$dBUsername = " root";
$dBPassword = "";
$dBName = "americansausa_db";

$conn = mysqli_connect($severName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
die("Connection failed: ". mysqli_connect_error());
}