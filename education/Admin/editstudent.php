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
//updat student details
if(isset($_REQUEST['requpdate'])){
    //check for empty field
    if(($_REQUEST['student_id']=="") || ($_REQUEST['student_name']=="") ||
    ($_REQUEST['student_email']=="") || ($_REQUEST['student_pwd']=="") ||
    ($_REQUEST['student_occu']=="")){
         $msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2"
         role="alert">Fill All Details </div>';
     } else {
        $sid= $_REQUEST['student_id'];
        $sname= $_REQUEST['student_name'];
        $semail= $_REQUEST['student_email'];
        $spwd= $_REQUEST['student_pwd'];
        $soccu= $_REQUEST['student_occu'];
        
        $sql= "UPDATE student SET student_id='$sid',student_name='$sname',
        student_email='$semail',student_pwd='$spwd',student_occu='$soccu'
        WHERE student_id='$sid'";
        if($conn->query($sql)== TRUE){
            $msg='<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Student Details Updated Succesfully</div>';
    } else {
        $msg='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Student Updation Failed</div>';
    }
}
}
?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">
<?php
    if(isset($_REQUEST['view'])){
        $sql="SELECT * FROM student WHERE student_id = {$_REQUEST['id']}";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
    }
?>

<h3 class="text-center">Update Student Detail</h3>
<form action="" method="POST" enctype="multipart/form-data">
<div class="form-group">
        <label for="student_id">ID</label>
        <input type="text" class="form-control" id="student_id" name="student_id"
        value="<?php if(isset($row['student_id'])){echo $row['student_id'];}?>" readonly>
</div>
    <div class="form-group">
        <label for="student_name">Name</label>
        <input type="text" class="form-control" id="student_name" name="student_name"
        value="<?php if(isset($row['student_name'])){echo $row['student_name'];}?>">
</div>
<div class="form-group">
        <label for="student_email">E-Mail</label>
        <input type="text" class="form-control" id="student_email" name="student_email"
        value="<?php if(isset($row['student_email'])){echo $row['student_email'];}?>">
</div>
<div class="form-group">
        <label for="student_pwd">pwdword</label>
        <input type="text" class="form-control" id="student_pwd" name="student_pwd"
        value="<?php if(isset($row['student_pwd'])){echo $row['student_pwd'];}?>">
</div>
<div class="form-group">
        <label for="student_occu">Occupation</label>
        <input type="text" class="form-control" id="student_occu" name="student_occu"
        value="<?php if(isset($row['student_occu'])){echo $row['student_occu'];}?>">
</div>
<div class="text-center">
    <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
    <a href="students.php" class="btn btn-secondary">Close</a>
</div>
<?php if(isset($msg)){echo $msg;} ?>
</form>
</div>
</div>



<?php
include('./admininclude/footer.php');
?> 