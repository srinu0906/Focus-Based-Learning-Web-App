<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Focused Learning Web Application</title>
    <link rel="stylesheet" href="style.css">
    <script>
        
        <?php
            $uname = $_GET['uname'] ?? null;
            $class = $_GET['class'] ?? 'undefined';
            echo " var user = '$uname';";
            echo " var cls = '$class';"
        ?>
        if (!user) {
            window.location.replace("index.html");
        }
        //alert(cls);
        function nav(sub) {
            var url = 'chapters.php?uname='+user+"&class="+cls+'&subject='+sub;
            window.location.href = url;
        }
    </script>
</head>
<body>
    <header>
        <h1>Focused Based Learning Web Application</h1>
    </header>  
    <h2>Subjects</h2>
    <div id="contents">
        <?php
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $database = "csp";
            
            $conn = mysqli_connect($hostname,$username,$password,$database);
            $query = "SELECT DISTINCT Subject FROM chapters WHERE Class = '$class';";
            $res = mysqli_query($conn,$query);
            $row = mysqli_fetch_assoc($res);
            while($row){
                $sub = $row['Subject'];
                echo "<button id='$sub' onclick='nav(".'"'.$sub.'"'.")'>$sub</button><br><br>";
                $row = mysqli_fetch_assoc($res);
            }
            mysqli_close($conn);
        ?>
    </div>
</body>
</html>