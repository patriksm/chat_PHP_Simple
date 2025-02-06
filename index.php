<?php

session_start();

function loginForm() {
    echo 
    '<div id="loginform">
    <p>Please enter your name to continue!</p>
    <form action="index.php" method="post">
        <label></label>
        <input name="name" type="text" id="name"></input>
        <input name="enter" type="submit" id="enter" value="Enter"></input>
    </form>
    </div>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Application</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if(!isset($_POST['name'])){
            loginForm();
        } 
         
    ?>
    <div id="wrapper">
        <div id="menu">
            <p>W e l c o m e, <?php echo $_POST['name']; ?></p>
            <form action="logout.php" method="POST"> 
                <button type="submit">E X I T</button> 
            </form>
        </div>
        <div id="chatbox"> C h a t B o x</div>
        <form name="message" action="">
            <input name="usermsg" type="text" id="usermsg"></input>
            <input name="submitmsg" type="submit" id="submitmsg" value="Send"></input>
        </form>
    </div>
</body>
</html>