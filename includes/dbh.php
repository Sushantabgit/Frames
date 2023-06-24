<?php

$serverName = "localhost";
$dBUsername = "id20958000_root";
$dBPassword = "@Root123";
$dBName = "id20958000_frames";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}