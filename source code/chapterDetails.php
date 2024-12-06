<?php
$cid = $_REQUEST['q'];

$hostname = "localhost";
$username = "root";
$password = "";
$database = "csp";

$conn = mysqli_connect($hostname,$username,$password,$database);

$query = "SELECT * FROM chapters WHERE cid = '$cid'";
$res = mysqli_query($conn,$query);
$arr = mysqli_fetch_assoc($res);
if($arr){
    echo $arr['Class'].', '.$arr['Subject'].', '.$arr['Cname'];
}
else{
    echo '0';
}
?>