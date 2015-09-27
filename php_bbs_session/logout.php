<?php
    session_start();
    session_destroy();
    header('location: http://jusarang.kanziw.com/login.php');
?>