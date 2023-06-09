<?php
    session_start();
    session_destroy();
    header("Location: ../signIns.php");
?>