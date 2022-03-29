<?php
if(!isset($_SESSION)){
        session_start();
    }
    
    include('./header.php');
    include_once('../dbconnect.php');
    
    if(isset($_SESSION['is_login'])){
        $studentemail=$_SESSION['studentloginemail'];
    
    }else {
        echo "<script> location.href='../index.php';</script>";
    }
    $sql="SELECT * FROM student WHERE student_email='$studentemail'";
    $result=$conn->query($sql);
    if($result->num_rows == 1){
        $row=$result->fetch_assoc();
        $studentid=$row["student_id"];
        $studentname=$row["student_name"];
        $studentoccu=$row["student_occu"];
        $studentimg=$row["student_img"];
    }

if(isset($_REQUEST['updatestudentnamebtn'])){
    //checking for empty form
    if(($_REQUEST['studentname']=="")){
    //|| ($_REQUEST['student_email']=="")
    //|| ($_REQUEST['student_pwd']=="")|| ($_REQUEST['student_occu']=="")
    
        $passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Details </div>';
    } else{

        $studentname=$_REQUEST['studentname'];
        $studentoccu=$_REQUEST['studentoccu'];
        //$student_email=$_REQUEST['student_email'];
        $student_image=$_FILES['studentimg']['name'];
        $student_image_temp=$_FILES['studentimg']['tmp_name'];
        $img_folder='../img/studentprofilepic/'.$student_image;
        move_uploaded_file($student_image_temp,$img_folder);

        $sql= "UPDATE student SET student_name='$studentname',student_occu='$studentoccu',
        student_img='$img_folder' WHERE student_email='$studentemail'";
        if($conn->query($sql)== TRUE){
            $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Student Details Updated Succesfully</div>';
    } else {
        $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to update your details</div>';
   
    }
    }
}
?> 

<div class="col-sm-6 mt-5">

<form class="mx-5" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="studentid">Student ID</label>
        <input type="text" class="form-control" id="studentid" name="studentid"
        value=" <?php if(isset($studentid)) {echo $studentid;} ?>" readonly>
</div>
<div class="form-group">
        <label for="studentemail">E-Mail ID</label>
        <input type="email" class="form-control" id="studentemail"
        value=" <?php echo $studentemail
             ?>" readonly>
</div>
<div class="form-group">
        <label for="studentname">Student Name</label>
        <input type="text" class="form-control" id="studentname" name="studentname"
        value=" <?php if(isset($studentname)) {echo $studentname;} ?>">
</div>
<div class="form-group">
        <label for="studentoccu">Occupation</label>
        <input type="text" class="form-control" id="studentoccu" name="studentoccu"
        value=" <?php if(isset($studentoccu)) {echo $studentoccu;} ?>">
</div>
<div class="form-group">
        <label for="studentimg">Upload Image</label>
        <input type="file" class="form-control-file" id="studentimg" name="studentimg">
</div>
    <button type="submit" class="btn btn-primary" name="updatestudentnamebtn">Update</button>
    <?php if(isset($passmsg)) {echo $passmsg;} ?>
</form>
</div>
</div>
</div>

<?php
include('footer.php');
?> 