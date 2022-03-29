<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!--css-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    


    <!--FONT AWESOME CSS-->
    <link rel="stylesheet" href="../css/all.min.css">
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <!--custom syyle css-->
    <link rel="stylesheet" href="../css/adminstyle.css">
</head>
<body>
    
    <!--admin Top navbar-->
    <nav class="navbar navbar-dark fixed-top p-0 shadow"
    style="background-color:#225470;">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0"
    href="AdminDashboard.php">E-Learning <small class="text-white">Admin Area </small></a>
</nav>

<!--side-->
<div class="container-fluid mb-5" style="margin-top:40px;">
    <div class="row">
        <nav class="col-sm-3 col-md-2 bg-light sidebar py-5d-print-none">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                    <br><br>
                        <a class="nav-link" href="AdminDashboard.php">
                            <i class="fas fa-tachometer-alt"></i>
                            Dashboard
                        </a>
                    </li><li class="nav-item"> 
                            <a class="nav-link" href="courses.php">
                            <i class="fa-solid fa-graduation-cap"></i>
                                Courses</a>    
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="lesson.php">
                            <i class="fa-solid fa-book"></i>
                                Lessons</a>    
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="students.php">
                            <i class="fa-solid fa-users"></i>
                                Students</a>    
                        </li><li class="nav-item"> 
                            <a class="nav-link" href="#">
                            <i class="fa-solid fa-table"></i>
                                Sell Report</a>    
                        </li><li class="nav-item"> 
                            <a class="nav-link" href="">
                            <i class="fa-solid fa-indian-rupee-sign"></i>
                                Payment Status</a>    
                        </li><li class="nav-item"> 
                            <a class="nav-link" href="feedback.php">
                                <i class="fab fa-accessible-icon"></i>
                                Feedback</a>    
                        </li><li class="nav-item"> 
                            <a class="nav-link" href="adminchangepass.php">
                            <i class="fa-solid fa-key"></i>
                                Change Password</a>    
                        </li><li class="nav-item"> 
                            <a class="nav-link" href="../logout.php">
                            <i class="fa-solid fa-right-from-bracket"></i>
                                Logout</a>    
                        </li>
                </ul>
            </div>
        
</nav>
    