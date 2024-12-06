<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "csp";

$conn = mysqli_connect($hostname,$username,$password,$database);

$cid = $_POST['cid'];
$topic = $_POST['topic'];
$vlink = $_POST['vlink'];

$vid = substr($vlink,16);

$query = "INSERT INTO videolinks VALUES ( '$vid' , '$cid', '$topic')";

mysqli_query($conn,$query);

echo "<h1> Inserted Successfully !</h1>";

mysqli_close($conn);
?>