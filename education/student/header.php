<?php
include_once('../dbconnect.php');
if(!isset($_SESSION)){
        session_start();
    }
    
    if(isset($_SESSION['is_login'])){
        $studentloginemail=$_SESSION['studentloginemail'];
    
    } //else {
        //echo "<script> location.href='../index.php';</script>";
    //}
    if(isset($studentloginemail)){
        $sql="SELECT student_img FROM student WHERE student_email='$studentloginemail'";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
        $student_img=$row['student_img'];
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Profile</title>
         <!--css-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    


    <!--FONT AWESOME CSS-->
    <link rel="stylesheet" href="../css/all.min.css">
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <!--custom syyle css-->
    <link rel="stylesheet" href="../css/studentstyle.css">
    </head>
    <body>
        <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background-color:#225470;">
        <a class="navbar-brand col-sm-3 cold-md-2 mr-0" href="studentprofile.php">E-Learning</a>
</nav>

<!--Sidebar-->
<div class="container-fluid mb-5" style="margin-top:40px;">
<div class="row">
    <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
        <div class="sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item mb-3">
                    <img src="<?php echo $student_img ?>" alt="studentimage" class="img-thumbnail rounded-circle">
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="studentprofile.php">
                        <i class="fas fa-user"></i>
                        Profile <span class="sr-only">(Current)</span>
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mycourse.php">
                            <i class="fab fa-accessible-icon"></i>
                            My Courses </a>
                        </li>
                            <li class="nav-item">
                        <a class="nav-link" href="studentfeedback.php">
                            <i class="fab fa-accessible-icon"></i>
                            Feedback </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="studentchangepwd.php">
                            <i class="fab fa-key"></i>
                            Change Password </a></li>
                            <li class="nav-item">
                        <a class="nav-link" href="../logout.php">
                            <i class="fab fa-sign-out-alt"></i>
                            Logout 
                        </a></li>
                    </ul>
                    </div>
                    </nav>


