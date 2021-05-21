<?php

    session_start();

    if (!isset($_SESSION["receipt"])) {
        header("location:enquire.php");
        exit();
    }
    unset($_SESSION["receipt"]);
    
?>