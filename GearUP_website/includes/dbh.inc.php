<?php

$serverName = "epbjc-porto.net";
$dBUsername = "epbjc_gearup";
$dBPassword = "qJzY24QsHf";
$dBName = "epbjc_gearup";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>