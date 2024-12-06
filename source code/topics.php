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
            $cid   = $_GET['cid'] ?? 'undefined';
            echo " var user = '$uname';";
            echo " var cls = '$class';";
            echo " var sub = '$sub';";
            echo " var cid = '$cid';";
        ?>
        if (!user) {
            window.location.replace("index.html");
        }
        //alert(cid); 
        function nav(vid) {
            var url = 'video.php?uname='+user+"&class="+cls+'&subject='+sub+'&cid='+cid+'&vid='+vid;
            window.location.href = url;
        }
    </script>
</head>
<body>
    <header>
        <h1>Focused Based Learning Web Application</h1>
    </header> 
    <h2>Topics</h2> 
    <div id="contents">
        <?php
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $database = "csp";
            
            $conn = mysqli_connect($hostname,$username,$password,$database);
            $query = "SELECT * FROM videolinks WHERE Cid = '$cid'";
            $res = mysqli_query($conn,$query);
            $row = mysqli_fetch_assoc($res);
            while($row){
                $vid = $row['Vid'];
                $topic = $row['Topic'];
                echo "<button onclick='nav(".'"'.$vid.'"'.")'>$topic</button><br><br>";
                $row = mysqli_fetch_assoc($res);
            }
            mysqli_close($conn);
        ?>
    </div>
</body>
</html>