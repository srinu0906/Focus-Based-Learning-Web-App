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
            $name = $_GET['name'] ?? null;
            echo " var user = '$uname';";
        ?>
        if (!user) {
            window.location.replace("index.html");
        }
        function nav(cls) {
            var url = 'subjects.php?uname='+user+"&class="+cls;
            window.location.href = url;
        }
    </script>
</head>
<body>
    <header>
        <h1>Focused Based Learning Web Application</h1>
    </header> 
    <h2>Welcome, <?php echo"$name";?></h2> 
    <div id="contents">
        <?php
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $database = "csp";
            
            $conn = mysqli_connect($hostname,$username,$password,$database);
            $query = "SELECT DISTINCT Class from chapters ORDER BY Class DESC";
            $res = mysqli_query($conn,$query);
            $row = mysqli_fetch_assoc($res);
            while($row){
                $class = $row['Class'];
                echo "<button class = 'cls' onclick='nav(".'"'.$class.'"'.")'>$class</button><br><br>";
                $row = mysqli_fetch_assoc($res);
            }
            mysqli_close($conn);
        ?>
    </div>
</body>
</html>