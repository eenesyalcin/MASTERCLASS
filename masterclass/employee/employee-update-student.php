<!-- PHP CODES -->
<?php

    include("../connect.php");     // Database connection page included


    $id = $_GET['id'];


    // Operation control when the button is pressed
    if(isset($_POST["student_save"]))
    {
        $student_fullName = $_POST["student_fullName"];
        $student_courseNO = $_POST["student_courseNO"];
        $student_save_email = $_POST["student_save_email"];
        $student_save_password = $_POST["student_save_password"];
        $student_save_lessons = $_POST["student_save_lessons"];


        // Transferring data from form to database
        $sql = "UPDATE `students` SET `full_name`='$student_fullName',`course_no`='$student_courseNO',`student_email`='$student_save_email',`student_password`='$student_save_password',`lessons`='$student_save_lessons' WHERE id=$id";
        $result = mysqli_query($connect, $sql);


        // Checking the correct sending of data to the database
        if ($result) {
            header("Location: employee-students.php?success");
        } else {
            echo 'Failed to update record: ' . mysqli_error($connect);
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
        <link rel="stylesheet" href="style-employee.css">
        <!-- BOOTSTRAP LIBRARY INTEGRATED -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <!-- Webpage title -->
        <title>Update Student</title>
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="100" class="bg-lightgray">

        <!-- NAVBAR CODES -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="container">

                <a href="employee.php" class="navbar-brand">
                    <i class="fa-solid fa-chalkboard-user me-3"></i>
                    <span>TEACHER</span>
                </a>

                <button type="button" class="navbar-toggler" data-bs-target="#navbar" data-bs-toggle="collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item ms-1 my-auto me-120">
                            <a href="employee-students.php" class="btn btn-dark" role="link">
                                <i class="fa-solid fa-users"></i>
                                <span>Students</span>
                            </a>
                        </li>  

                        <!--
                            <li class="nav-item ms-1 my-auto">
                                <a href="announcemenet-employee-announcement.php" class="btn btn-dark" role="link">
                                    <i class="fa-solid fa-bullhorn"></i>
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
                                            <a href="employee-message-students.php" class="dropdown-item">
                                                <i class="fa-solid fa-angle-right me-2"></i>
                                                <span>Student</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="employee-message-manager.php" class="dropdown-item">
                                                <i class="fa-solid fa-angle-right me-2"></i>
                                                <span>Manager</span>
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
                                            <a href="employee-update-password.php" class="dropdown-item">
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
                            <h2>UPDATE STUDENT</h2>
                        </div>
                    </div>
                </div>

                <!-- Student Update Form -->
                <div class="row mb-5 justify-content-center">
                    <div class="col-lg-8 d-none d-lg-block shadow-s">
                        <div>
                            <!-- PHP CODES -->
                            <?php
                            
                                $sql = "SELECT * FROM students WHERE id=$id LIMIT 1";
                                $result = mysqli_query($connect, $sql);
                                $row = mysqli_fetch_assoc($result);
                            
                            ?>
                            <form action="employee-update-student.php?id=<?php echo $_GET['id']; ?>" method="POST" class="p-5">
                                <!-- Full Name -->
                                <div class="mb-5">
                                    <h5 class="d-inline-block ms-1">
                                        <i class="fa-regular fa-file-lines me-2"></i>
                                        <span>FULL name</span>
                                    </h5>
                                    <input type="text" class="form-control form-control-lg" placeholder="Full name" name="student_fullName" value="<?php echo $row['full_name'] ?>">
                                </div>

                                <!-- Course NO -->
                                <div class="mb-5">
                                    <h5 class="d-inline-block ms-1">
                                        <i class="fa-solid fa-hashtag me-2"></i>
                                        <span>Course NO</span>
                                    </h5>
                                    <input type="text" class="form-control form-control-lg" placeholder="Course NO" name="student_courseNO" value="<?php echo $row['course_no'] ?>">
                                </div>

                                <!-- Email -->
                                <div class="mb-5">
                                    <h5 class="d-inline-block ms-1">
                                        <i class="fa-solid fa-envelope me-2"></i>
                                        <span>Email</span>
                                    </h5>
                                    <input type="email" class="form-control form-control-lg" placeholder="Email address" name="student_save_email" value="<?php echo $row['student_email'] ?>">
                                </div>

                                <!-- Password -->
                                <div class="mb-5">
                                    <h5 class="d-inline-block ms-1">
                                        <i class="fa-solid fa-unlock-keyhole me-2"></i>
                                        <span>Password</span>
                                    </h5>
                                    <input type="password" class="form-control form-control-lg" placeholder="Password" name="student_save_password" value="<?php echo $row['student_password'] ?>">
                                </div>

                                <!-- Lessons -->
                                <div class="mb-5">
                                    <h5 class="d-inline-block ms-1">
                                        <i class="fa-solid fa-unlock-keyhole me-2"></i>
                                        <span>Lessons</span>
                                    </h5>
                                    <input type="text" class="form-control form-control-lg" placeholder="Example: MAÖ - PFY" name="student_save_lessons" value="<?php echo $row['lessons'] ?>">
                                    <p><b>NOT: </b>İlk harf ders adı ve sonraki iki harf öğretmenin adı soyadı olacak şekilde giriniz. </p>
                                </div>

                                <!-- Student Update Button -->
                                <div class="row mb-5 justify-content-center">
                                    <div class="col-lg-4 d-none d-lg-block">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary border shadow-lg" name="student_save">
                                                UPDATE STUDENT
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