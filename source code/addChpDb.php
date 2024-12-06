<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "csp";

$conn = mysqli_connect($hostname,$username,$password,$database);

$cid = $_POST['cid'];
$cname = $_POST['cname'];
$subject = $_POST['subject'];
$class = $_POST['class'];

$query = "INSERT INTO CHAPTERS VALUES ( '$cid' , '$cname', '$subject', '$class')";

mysqli_query($conn,$query);

echo "<h1> Inserted Successfully !</h1>";

mysqli_close($conn);
?>