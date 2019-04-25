<?php
    session_start();

    session_destroy();
    header("location:../index.php?err=4");
    exit;

?>