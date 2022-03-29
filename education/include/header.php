<!DOCTYPE html>
<html Lang="en">

<head>
    <meta name="viewport" content="width=device-width,
        intitial-scale=1.0">
    <!--css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    


    <!--FONT AWESOME CSS-->
    <link rel="stylesheet" href="css/all.min.css">
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <!--custom syyle css-->
    <link rel="stylesheet" href="css/style.css">

    <title>E-Learning</title>
</head>

<body>
    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg navbar-dark px-5 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">E-Learning</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav custom-nav">
                    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link">Course</a></li>
                    <li class="nav-item custom-nav-item"><a href="paymentstatus.php" class="nav-link">Payment Status</a></li>
                    <?php
                        session_start();
                        if(isset($_SESSION['is_login'])){
                            echo'<li class="nav-item custom-nav-item"><a href="student/studentprofile.php" class="nav-link">My Profile</a></li>
                            <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
                        }else{
                            echo '<li class="nav-item custom-nav-item"><a href="#" data-bs-toggle="modal" data-bs-target="#loginmodal" class="nav-link">Login</a></li>
                            <li class="nav-item custom-nav-item"><a href="#" data-bs-toggle="modal" data-bs-target="#signupmodal" class="nav-link">Sign up</a></li>';
                        }
                    ?>
 
                
                    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Feedback</a></li>
                    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Navbar End-->