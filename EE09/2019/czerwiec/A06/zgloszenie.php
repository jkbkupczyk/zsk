<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "wedkarstwo";

$lowisko = $_POST['lowisko'];
$data = $_POST['data'];
$sedzia = $_POST['sedzia'];

$query = "INSERT INTO zawody_wedkarskie VALUES(NULL, 0, " . $lowisko . ", '" . $data . "', '" . $sedzia . "')";
echo $query;

$conn = mysqli_connect($server, $user, $pass, $database);

mysqli_query($conn, $query);

mysqli_close($conn);