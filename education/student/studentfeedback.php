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
    }

    
if(isset($_REQUEST['submitfeedbackbtn'])){
    //checking for empty form
    if(($_REQUEST['f_content']=="")){
    //|| ($_REQUEST['student_email']=="")
    //|| ($_REQUEST['student_pwd']=="")|| ($_REQUEST['student_occu']=="")
    
        $passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Details </div>';
    } else{

        $fcontent=$_REQUEST["f_content"];
        $sql= "INSERT INTO feedback (f_content,student_id) VALUES ('$fcontent','$studentid')";
        if($conn->query($sql)== TRUE){
            $passmsg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Feedback Submitted Succesfully</div>';
    } else {
        $passmsg='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to submit your feedback</div>';
   
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
        <label for="f_content">Give your Feedback :</label>
        <textarea class="form-control" id="f_content" name="f_content" row=2></textarea>
</div>
    <button type="submit" class="btn btn-primary" name="submitfeedbackbtn">Submit</button>
    <?php if(isset($passmsg)) {echo $passmsg;} ?>
</form>
</div>
</div>
</div>

<?php
include('footer.php');
?> 