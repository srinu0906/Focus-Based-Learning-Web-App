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
            $vid   = $_GET['vid'] ?? 'undefined';
            echo " var user = '$uname';";
            echo " var cls = '$class';";
            echo " var sub = '$sub';";
            echo " var cid = '$cid';";
            echo " var vid = '$vid';";
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
    <div id="contents">
        <?php
            echo "<iframe width='460' height='315' src='https://www.youtube.com/embed/$vid&rel=0' title=YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' referrerpolicy='strict-origin-when-cross-origin' allowfullscreen></iframe>"
        ?>
    </div>
</body>
</html>