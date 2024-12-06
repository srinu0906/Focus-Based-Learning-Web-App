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
            $sub   = $_GET['subject'] ?? 'undefined';
            echo " var user = '$uname';";
            echo " var cls = '$class';";
            echo " var sub = '$sub';";
        ?>
        if (!user) {
            window.location.replace("index.html");
        }
        //alert(sub); 
        function nav(cid) {
            var url = 'topics.php?uname='+user+"&class="+cls+'&subject='+sub+'&cid='+cid;
            window.location.href = url;
        }
    </script>
</head>
<body>
    <header>
        <h1>Focused Based Learning Web Application</h1>
    </header>  
    <h2>Chapters</h2>
    <div id="contents">
        <?php
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $database = "csp";
            
            $conn = mysqli_connect($hostname,$username,$password,$database);
            $query = "SELECT DISTINCT Cid ,Cname FROM chapters WHERE Class = '$class'and Subject='$sub' ORDER BY Cid";
            $res = mysqli_query($conn,$query);
            $row = mysqli_fetch_assoc($res);
            while($row){
                $chp = $row['Cname'];
                $cid = $row['Cid'];
                echo "<button onclick='nav(".'"'.$cid.'"'.")'>$chp</button><br><br>";
                $row = mysqli_fetch_assoc($res);
            }
            mysqli_close($conn);
        ?>
    </div>
</body>
</html>