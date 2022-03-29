<?php
if(!isset($_SESSION)){
        session_start();
    }
    
    include('./admininclude/header.php');
    include('../dbconnect.php');
    
    if(isset($_SESSION['is_admin_login'])){
        $adminemail=$_SESSION['adminloginemail'];
    
    }else {
        echo "<script> location.href='../index.php';</script>";
    }


if(isset($_REQUEST['newstudentsubmitbtn'])){
    //checking for empty form
    if(($_REQUEST['student_name']=="") || ($_REQUEST['student_email']=="")
    || ($_REQUEST['student_pwd']=="")|| ($_REQUEST['student_occu']=="")){
        $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Details </div>';
    } else{

        $student_name=$_REQUEST['student_name'];
        $student_email=$_REQUEST['student_email'];
        $student_pwd=$_REQUEST['student_pwd'];
        $student_occu=$_REQUEST['student_occu'];

        $sql= "INSERT INTO student (student_name,student_email,
        student_pwd,student_occu)
        VALUES ('$student_name','$student_email','$student_pwd','$student_occu')";

        if($conn->query($sql)== TRUE){
            $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Student Added Succesfully</div>';
    } else {
        $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to add Student</div>';
   
    }
    }

}
?> 


<div class="col-sm-6 mt-5 mx-3 jumbotron">
<h3 class="text-center">Add New Student</h3>
<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="student_name">Name</label>
        <input type="text" class="form-control" id="student_name" name="student_name">
</div>
<div class="form-group">
        <label for="student_email">E-Mail</label>
        <input type="text" class="form-control" id="student_email" name="student_email">
</div>
<div class="form-group">
        <label for="student_pwd">Password</label>
        <input type="text" class="form-control" id="student_pwd" name="student_pwd">
</div>
<div class="form-group">
        <label for="student_occu">Occupation</label>
        <input type="text" class="form-control" id="student_occu" name="student_occu">
</div>
<div class="text-center">
    <button type="submit" class="btn btn-danger" id="newstudentsubmitbtn" name="newstudentsubmitbtn">Submit</button>
    <a href="students.php" class="btn btn-secondary">Close</a>
</div>
<?php if(isset($msg)){echo $msg;} ?>
</form>
</div>
</div>
</div>



<?php
include('./admininclude/footer.php');
?> 