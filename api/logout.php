<?php
        session_start();//aukaistaan sessio sen lopettamista varten
        session_destroy();
        header("Location: ../ui/login.html");//siirrytään kirjautumissivulle
?> 
