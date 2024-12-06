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
            echo " var user = '$uname';";
        ?>
        if (!user) {
            window.location.replace("index.html");
        }
        function display(){
            var id = document.getElementById("cid").value;
            var txt = document.getElementById("suggestion");
            if (id.length != 7 ){
                txt.style.color = 'red';
                txt.innerText = "Chapter id must be 7 characters";
               // txt.innerText += id.length;
            }
            else{
                getDetails(id);
            }
        }

        function getDetails(id){
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function(){
                const msg = this.responseText;
                var txt = document.getElementById("suggestion");
                if(msg == '0'){
                    txt.style.color = 'red';
                    txt.innerText = "Chapter id not found";
                }
                else{
                    console.log(msg);
                    txt.style.color = "green";
                    txt.innerText = msg;
                }
            }
            xhttp.open('POST',"chapterDetails.php?q="+id,true);
            xhttp.send()
        }
    </script>
</head>
<body>
    <header>
        <h1>Focused Based Learning Web Application</h1>
    </header> 
    <h2>Add video link</h2>
    <form name="add" method="post" action="addLinkDb.php">
        Enter chapter id:
        <input type="text" onblur="display()" name="cid" id="cid">
        <p id="suggestion">Ex:c10en01</p>
        Enter topic name:
        <input type="text" name="topic" id="topic"><br><br>
        Paste video link:
        <input type="text" name="vlink" id="vlink">
        <br><br>
        <input type="submit" value="Add" class="submit">
    </form>
</body>
</html>