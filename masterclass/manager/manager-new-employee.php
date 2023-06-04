<!-- PHP CODES -->
<?php

    include("../connect.php");     // Database connection page included


    // Operation control when the button is pressed
    if(isset($_POST["employee_save"]))
    {
        $employee_fullName = $_POST["employee_fullName"];
        $employee_courseCode = $_POST["employee_courseCode"];
        $employee_save_email = $_POST["employee_save_email"];
        $employee_save_password = $_POST["employee_save_password"];
        $branch = $_POST["branch"];


        // Transferring data from form to database
        $add = "INSERT INTO employees(full_name, course_code, employee_email, employee_password, branch) VALUES('$employee_fullName','$employee_courseCode','$employee_save_email', '$employee_save_password', '$branch')";
        $addRun = mysqli_query($connect, $add);


        // Checking the correct sending of data to the database
        if($addRun){
            header("Location: manager-employees.php? başarılı ");
        }
        else
        {
            echo 'Failed to add record!';
 
        }


        // Connection to database terminated
        mysqli_close($connect);
    }

?> <!-- END OF PHP CODE BLOCK -->


<!-- HTML CODES -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <!-- INTEGRATING THE FONT AWESOME FILE -->
        <link rel="stylesheet" href="../all.min.css">
        <!-- INTEGRATING THE CSS FILE -->
        <link rel="stylesheet" href="style-manager.css">
        <!-- BOOTSTRAP LIBRARY INTEGRATED -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <!-- Webpage title -->
        <title>New Employee</title>
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="100" class="bg-lightgray">

        <!-- NAVBAR CODES -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="container">

                <a href="manager.php" class="navbar-brand manager">
                    <i class="fa-solid fa-user-tie me-3"></i>
                    <span>MANAGER</span>
                </a>

                <button type="button" class="navbar-toggler" data-bs-target="#navbar" data-bs-toggle="collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item ms-1 my-auto">
                            <a href="manager-students.php" class="btn btn-dark" role="link">
                                <i class="fa-solid fa-users"></i>
                                <span>Students</span>
                            </a>
                        </li>  

                        <li class="nav-item ms-1 my-auto me-120">
                            <a href="manager-employees.php" class="btn btn-dark" role="link">
                                <i class="fa-solid fa-chalkboard-user"></i>
                                <span>Employees</span>
                            </a>
                        </li>

                        <!--
                            <li class="nav-item ms-1 my-auto">
                                <a href="manager-announcement.php" class="btn btn-dark" role="link">
                                    <i class="fa-solid fa-chalkboard-user"></i>
                                    <span>Announcement</span>
                                </a>
                            </li>

                            <li class="nav-item me-120 my-auto">
                                <div class="dropdown">
                                    <a class="btn btn-dark dropdown-toggle" href="#" role="link" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-comments"></i>
                                        <span>Message</span>    
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="manager-message-students.php" class="dropdown-item">
                                                <i class="fa-solid fa-angle-right me-2"></i>
                                                <span>Student</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="manager-message-employees.php" class="dropdown-item">
                                                <i class="fa-solid fa-angle-right me-2"></i>
                                                <span>Employee</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        -->

                        <li class="nav-item my-auto">
                            <div class="dropdown">
                                <a class="btn btn-dark dropdown-toggle" href="#" role="link" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-user"></i>
                                    <span>PROFILE</span>    
                                </a>
                                <ul class="dropdown-menu">
                                    <!--
                                        <li>
                                            <a href="manager-update-password.php" class="dropdown-item">
                                                <i class="fs-6 fa-solid fa-gear"></i>
                                                <span>Settings</span>
                                            </a>
                                        </li>
                                    -->
                                    <li>
                                        <a href="logout.php" class="dropdown-item">
                                            <i class="fs-6 fa-solid fa-arrow-right-from-bracket"></i>
                                            <span>LOG OUT</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </nav> <!-- END OF NAVBAR CODE BLOCK -->


        <!-- SECTION CODES -->
        <section class="mt-100">
            <div class="container">

                <div class="row mb-5 justify-content-center">
                    <div class="col-lg-8 d-none d-lg-block">
                        <div class="text-center">
                            <i class="fa-3x fa-solid fa-file-circle-plus mb-3"></i>
                            <h2>NEW EMPLOYEE REGISTRATION</h2>
                        </div>
                    </div>
                </div>

                <!-- New Employee Addition Form -->
                <div class="row mb-5 justify-content-center">
                    <div class="col-lg-8 d-none d-lg-block shadow-s">
                        <div>
                            <form action="manager-new-employee.php" method="POST" class="p-5">
                                
                                <!-- Full Name -->
                                <div class="mb-5">
                                    <h5 class="d-inline-block ms-1">
                                        <i class="fa-regular fa-file-lines me-2"></i>
                                        <span>FULL name</span>
                                    </h5>
                                    <input type="text" class="form-control form-control-lg" placeholder="Full name" name="employee_fullName">
                                </div>

                                <!-- Course Code -->
                                <div class="mb-5">
                                    <h5 class="d-inline-block ms-1">
                                        <i class="fa-solid fa-hashtag me-2"></i>
                                        <span>Course Code</span>
                                    </h5>
                                    <input type="text" class="form-control form-control-lg" placeholder="Course Code" name="employee_courseCode">
                                </div>

                                <!-- Email -->
                                <div class="mb-5">
                                    <h5 class="d-inline-block ms-1">
                                        <i class="fa-solid fa-envelope me-2"></i>
                                        <span>Email</span>
                                    </h5>
                                    <input type="email" class="form-control form-control-lg" placeholder="Email address" name="employee_save_email">
                                </div>

                                <!-- Password -->
                                <div class="mb-5">
                                    <h5 class="d-inline-block ms-1">
                                        <i class="fa-solid fa-unlock-keyhole me-2"></i>
                                        <span>Password</span>
                                    </h5>
                                    <input type="password" class="form-control form-control-lg" placeholder="Password" name="employee_save_password">
                                </div>

                                <!-- Branch -->
                                <div class="mb-5">
                                    <h5 class="d-inline-block ms-1">
                                        <i class="fa-solid fa-unlock-keyhole me-2"></i>
                                        <span>Branch</span>
                                    </h5>
                                    <input type="text" class="form-control form-control-lg" placeholder="Math - Physics - Chemistry - Biology" name="branch">
                                </div>

                                <!-- Add New Employee Button -->
                                <div class="row mb-5 justify-content-center">
                                    <div class="col-lg-4 d-none d-lg-block">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary border shadow-lg" name="employee_save">
                                                SAVE EMPLOYEE
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>

            </div>
        </section> <!-- END OF SECTION CODE BLOCK -->


        <!-- JAVASCRIPT LIBRARY INTEGRATED -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        
    </body>
</html> <!-- END OF HTML CODE BLOCK -->