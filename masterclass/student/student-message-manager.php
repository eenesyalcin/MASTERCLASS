<!-- HTML CODES -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <!-- INTEGRATING THE FONT AWESOME FILE -->
        <link rel="stylesheet" href="../all.min.css">
        <!-- INTEGRATING THE CSS FILE -->
        <link rel="stylesheet" href="style-student.css">
        <!-- BOOTSTRAP LIBRARY INTEGRATED -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <!-- Webpage title -->
        <title>Manager Message</title>
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="100" class="bg-lightgray">

        <!-- NAVBAR CODES -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="container">

                <a href="student.php" class="navbar-brand">
                    <i class="fa-solid fa-graduation-cap me-3"></i>
                    <span>STUDENT</span>
                </a>

                <button type="button" class="navbar-toggler" data-bs-target="#navbar" data-bs-toggle="collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item ms-1 my-auto">
                            <a href="student-teachers.php" class="btn btn-dark" role="link">
                                <i class="fa-solid fa-chalkboard-user"></i>
                                <span>Teachers</span>
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
                                        <a href="student-message-teachers.php" class="dropdown-item">
                                            <i class="fa-solid fa-angle-right me-2"></i>
                                            <span>Teacher</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="student-message-manager.php" class="dropdown-item">
                                            <i class="fa-solid fa-angle-right me-2"></i>
                                            <span>Manager</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item my-auto">
                            <div class="dropdown">
                                <a class="btn btn-dark dropdown-toggle" href="#" role="link" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-user"></i>
                                    <span>PROFILE</span>    
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="student-password-update.php" class="dropdown-item">
                                            <i class="fs-6 fa-solid fa-gear"></i>
                                            <span>Settings</span>
                                        </a>
                                    </li>
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

                <!-- Manager Message -->
                <div class="row mb-5 justify-content-center">
                    <div class="col-lg-8 d-none d-lg-block">
                        <div class="text-center">
                            <i class="fa-3x fa-solid fa-comments mb-3"></i>
                            <h2>MANAGER MESSAGE</h2>
                        </div>
                    </div>
                </div>

                <!-- Write an Message Box -->
                <div class="row mb-5 justify-content-center">
                    <div class="col-lg-8 d-none d-lg-block">
                        <form action="student-message-manager.php" method="post">
                            <div class="mb-5">
                                <p class="d-inline-block ms-4">
                                    <i class="fa-solid fa-envelope me-1"></i>
                                    <span>MESSAGE</span>
                                </p>
                                <textarea class="form-control rounded-5 shadow-s" rows="10" placeholder="Please write message"></textarea>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Send Message Button -->
                <div class="row mb-5 justify-content-center">
                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="text-center">
                            <button class="btn btn-primary border shadow-lg">
                                <span>SEND MESSAGE</span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </section> <!-- END OF SECTION CODE BLOCK -->


        <!-- JAVASCRIPT LIBRARY INTEGRATED -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    </body>
</html> <!-- END OF HTML CODE BLOCK -->