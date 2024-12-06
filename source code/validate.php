<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "csp";
try {
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];
    if(!($uname && $pwd)){
        header("Location:index.html");
    }

    $conn = mysqli_connect($hostname, $username, $password, $database);


    if ($_POST['submit'] == "Enter") {
        $query = "Select * From loginaccounts where  uname = '$uname' and password = '$pwd' and Type = 'Teacher'";
    } else if ($_POST['submit'] == "Login") {
        $query = "Select * From loginaccounts where  uname = '$uname' and password = '$pwd' and Type = 'Student'";
    }

    $res = mysqli_query($conn, $query);

    if ($arr = mysqli_fetch_assoc($res)) {
        $name = $arr["Name"];
        if ($_POST['submit'] == "Enter") {
            header("Location:teacher.php?uname=$uname&name=$name");
        } else if ($_POST['submit'] == "Login") {
            header("Location:classes.php?uname=$uname&pwd=$pwd&name=$name");
        }
    } else {
        echo "<script>alert('Invalid Login Details');
        window.location.replace('index.html');
        </script>";
        //header("Location:index.html");
    }
} catch (Exception $e) {
    echo "Hello";
}
