<!-- PHP CODES -->
<?php

    // Include database connection file on page
    include("connect.php");


    /* STUDENT LOGIN */
    if (isset($_POST['student_email']) && isset($_POST['student_password'])) 
    {
        $student_email = $_POST['student_email'];
        $student_password = $_POST['student_password'];

        $student_query = "SELECT * FROM students WHERE student_email = '$student_email' AND student_password = '$student_password'";
        $student_result = mysqli_query($connect, $student_query);

        if (mysqli_num_rows($student_result) == 1) {
            // Login successful, redirect user to home page
            header("Location: student/student.php");
            exit();
        } else {
            // Login failed, view error message
            $student_error_message = "INCORRECT ENTRY";
        }
    }


    /* EMPLOYEE LOGIN */
    if (isset($_POST['employee_email']) && isset($_POST['employee_password'])) 
    {
        $employee_email = $_POST['employee_email'];
        $employee_password = $_POST['employee_password'];

        $employee_query = "SELECT * FROM employees WHERE employee_email = '$employee_email' AND employee_password = '$employee_password'";
        $employee_result = mysqli_query($connect, $employee_query);

        if (mysqli_num_rows($employee_result) == 1) {
            // Login successful, redirect user to home page
            header("Location: employee/employee.php");
            exit();
        } else {
            // Login failed, view error message
            $employee_error_message = "INCORRECT ENTRY";
        }
    }


    /* MANAGER BAĞLANTI */
    if (isset($_POST['manager_email']) && isset($_POST['manager_password'])) 
    {
        $manager_email = $_POST['manager_email'];
        $manager_password = $_POST['manager_password'];

        $manager_query = "SELECT * FROM managers WHERE manager_email = '$manager_email' AND manager_password = '$manager_password'";
        $manager_result = mysqli_query($connect, $manager_query);

        if (mysqli_num_rows($manager_result) == 1) {
            // Login successful, redirect user to home page
            header("Location: manager/manager.php");
            exit();
        } else {
            // Login failed, view error message
            $manager_error_message = "INCORRECT ENTRY";
        }
    }

    // Close connection
    mysqli_close($connect);

?> <!-- END OF PHP CODE BLOCK -->


<!-- HTML CODES -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <!-- INTEGRATING THE FONT AWESOME FILE -->
        <link rel="stylesheet" href="all.min.css">
        <!-- INTEGRATING THE CSS FILE -->
        <link rel="stylesheet" href="style.css">
        <!-- BOOTSTRAP LIBRARY INTEGRATED -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <!-- Webpage title -->
        <title>LOGIN</title>
    </head>

    <body class="bg-color"> 

        <!-- SECTION CODES -->
        <section id="home" class="text-dark">
            <div class="img-overlay">
                <div class="container mt-5">
                    <div class="row justify-content-center">

                        <!-- STUDENT LOGIN -->
                        <div class="col-lg-4">
                            <div class="my-4 d-flex justify-content-center">
                                <button type="button" class="btn btn-warning rounded-pill btn-lg" data-bs-toggle="collapse" data-bs-target="#content1">
                                    <i class="fa-solid fa-graduation-cap me-1"></i>
                                    <span>STUDENT LOGIN</span>
                                </button>
                            </div>
                            <div class="my-4 d-flex justify-content-center">
                                <div class="container text-center text-danger">
                                    <!-- PHP Codes -->
                                    <?php if (isset($student_error_message)) { ?>
                                        <i class="fs-3 fa-solid fa-triangle-exclamation"></i>
                                        <p style="color: red;"><?php echo $student_error_message; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="card collapse mb-3 bg-light" id="content1">
                                <div class="card-header bg-warning text-center">
                                    <h2 class="card-title mt-2">Student Login</h2>
                                    <p>Please login.</p>
                                </div>
                                <div class="card-body">
                                    <form action="login.php" method="POST">
                                        <!-- Email -->
                                        <div class="mb-5">
                                            <h6 class="d-inline-block ms-1">
                                                <i class="fa-solid fa-envelope me-2"></i>
                                                <span>EMAIL</span>
                                            </h6>
                                            <input type="email" class="form-control form-control-lg" placeholder="Email" name="student_email">
                                        </div>
                                        <!-- Password -->
                                        <div class="mb-5">
                                            <h6 class="d-inline-block ms-1">
                                                <i class="fa-solid fa-unlock-keyhole me-2"></i>
                                                <span>PASSWORD</span>
                                            </h6>
                                            <input type="password" class="form-control form-control-lg" placeholder="Password" name="student_password">
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <input type="submit" class="btn btn-outline-dark d-block" name="student_login" value="LOGIN">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- TEACHER LOGIN -->
                        <div class="col-lg-4">
                            <div class="my-4 d-flex justify-content-center">
                                <button type="button" class="btn btn-info rounded-pill btn-lg" data-bs-toggle="collapse" data-bs-target="#content2">
                                    <i class="fa-solid fa-chalkboard-user me-1"></i>
                                    <span>TEACHER LOGIN</span>
                                </button>
                            </div>
                            <div class="my-4 d-flex justify-content-center">
                                <div class="container text-center text-danger">
                                    <!-- PHP Codes -->
                                    <?php if (isset($employee_error_message)) { ?>
                                        <i class="fs-3 fa-solid fa-triangle-exclamation"></i>
                                        <p style="color: red;"><?php echo $employee_error_message; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="card collapse mb-3 bg-light" id="content2">
                                <div class="card-header bg-info text-center">
                                    <h2 class="card-title mt-2">Teacher Login</h2>
                                    <p>Please login.</p>
                                </div>
                                <div class="card-body">
                                    <form action="login.php" method="POST">
                                        <!-- Email -->
                                        <div class="mb-5">
                                            <h6 class="d-inline-block ms-1">
                                                <i class="fa-solid fa-envelope me-2"></i>
                                                <span>EMAIL</span>
                                            </h6>
                                            <input type="email" class="form-control form-control-lg" placeholder="Email" name="employee_email">
                                        </div>
                                        <!-- Password -->
                                        <div class="mb-5">
                                            <h6 class="d-inline-block ms-1">
                                                <i class="fa-solid fa-unlock-keyhole me-2"></i>
                                                <span>PASSWORD</span>
                                            </h6>
                                            <input type="password" class="form-control form-control-lg" placeholder="Password" name="employee_password">
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <input type="submit" class="btn btn-outline-dark d-block" name="employee_login" value="LOGIN">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- MANAGER LOGIN -->
                        <div class="col-lg-4">
                            <div class="my-4 d-flex justify-content-center">
                                <button type="button" class="btn btn-danger rounded-pill btn-lg" data-bs-toggle="collapse" data-bs-target="#content3">
                                    <i class="fa-solid fa-user-tie me-1"></i>
                                    <span>MANAGER LOGIN</span>
                                </button>
                            </div>
                            <div class="my-4 d-flex justify-content-center">
                                <div class="container text-center text-danger">
                                    <!-- PHP Codes -->
                                    <?php if (isset($manager_error_message)) { ?>
                                        <i class="fs-3 fa-solid fa-triangle-exclamation"></i>
                                        <p style="color: red;"><?php echo $manager_error_message; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="card collapse mb-3 bg-light" id="content3">
                                <div class="card-header bg-danger text-center">
                                    <h2 class="card-title mt-2">Manager Login</h2>
                                    <p>Please login.</p>
                                </div>
                                <div class="card-body">
                                    <form action="login.php" method="POST">
                                        <!-- Email -->
                                        <div class="mb-5"> 
                                            <h6 class="d-inline-block ms-1">
                                                <i class="fa-solid fa-envelope me-2"></i>
                                                <span>EMAIL</span>
                                            </h6>
                                            <input type="email" class="form-control form-control-lg" placeholder="Email" name="manager_email">
                                        </div>
                                        <!-- Password -->
                                        <div class="mb-5">
                                            <h6 class="d-inline-block ms-1">
                                                <i class="fa-solid fa-unlock-keyhole me-2"></i>
                                                <span>PASSWORD</span>
                                            </h6>
                                            <input type="password" class="form-control form-control-lg" placeholder="Password" name="manager_password">
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <input type="submit" class="btn btn-outline-dark d-block" name="manager_login" value="LOGIN">
                                        </div>
                                    </form>
                                </div>
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