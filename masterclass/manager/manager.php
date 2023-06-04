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
        <title>Welcome Manager</title>
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
        <section class="mt-150">
            <div class="img-overlay">
                <div class="container home-inner">
                    <div class="row justify-content-center mb-5">
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="bg-lightgray text-center pe-auto">
                                <!-- Welcome Page -->
                                <img src="../img/master-1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- END OF SECTION CODE BLOCK -->


        <!-- JAVASCRIPT LIBRARY INTEGRATED -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    </body>
</html> <!-- END OF HTML CODE BLOCK -->