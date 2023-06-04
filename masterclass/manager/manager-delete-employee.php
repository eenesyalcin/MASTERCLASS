<!-- PHP CODES -->
<?php

    // Database connection page included
    include("../connect.php");


    // Student deleting teacher registration
    $id = $_GET['id'];
    $delete = "DELETE FROM employees WHERE id=$id";
    $deleteRun = mysqli_query($connect, $delete);
    if($deleteRun){
        header("Location: manager-employees.php?");
    }else{
        echo "Failed!" . mysqli_error($connect);
    }

?> <!-- END OF PHP CODE BLOCK -->