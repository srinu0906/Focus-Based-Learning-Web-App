<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Focused Based Learning Web Application</h1>
    </header>  
    <h2>Add Chapters</h2>
    <div id="contents">
    <form action="addChpDb.php" method="post">
        Chapter Id : <input type="text" name="cid" id="cid" required> <br>
        Chapter Name : <input type="text" name="cname" id="cname" required> <br>
        Subject : <input type="text" name="subject" id="subject" required> <br>
        Class : <input type="text" name="class" id="class" required> <br>
        <input type="submit" class="submit" value="Add">
    </form>
    </div>
</body>
</html>