<?php
        session_start();
        session_destroy();
        header("Location: ../ui/login.html");
?>
