<?php
    session_start();
    $text = $_POST['usermsg'];
    
    $text_message = "<div><span>".$text."</span></div>";

    file_put_contents("log.html", $text_message, FILE_APPEND | LOCK_EX);
?>