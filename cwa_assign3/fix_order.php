<?php
    session_start();

    $errMsg = $_SESSION["errMsg"];
    echo "<p>", $errMsg, "</p>";
?>