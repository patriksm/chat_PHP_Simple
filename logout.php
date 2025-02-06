<?php
    session_destroy();
    header("Location: index.php"); // Change to your desired redirect page 
    exit();
?>