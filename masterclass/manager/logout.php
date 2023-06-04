<!-- PHP CODES --> 
<?php

    // PHP logout codes
    session_start();
    if(session_destroy()){
        header("Location: ../login.php");
    }

?> <!-- END OF PHP CODE BLOCK -->