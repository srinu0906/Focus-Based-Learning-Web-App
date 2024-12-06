<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    </script>
</head>
<body>
    <header>
        <h1>Focused Based Learning Web Application</h1>
    </header>  
    <h2>Welcome, <?php echo"$name";?></h2> 
    <div id="contents">
        <a href="addChp.php?uname=<?php echo"$uname";?>"><button>Add Chapters</button></a><br><br>
        <a href="addLink.php?uname=<?php echo"$uname";?>"><button>Add Video Links</button></a><br><br>
        <a href="classes.php?uname=<?php echo"$uname";?>&name=<?php echo"$name";?>"><button>View Contents</button></a><br><br>
    </div>
</body>
</html>