<?php
if(!isset($_SESSION)){
    session_start();
}

include('header.php');
include('../dbconnect.php');

if(isset($_SESSION['is_login'])){
    $studentemail=$_SESSION['studentloginemail'];
  
}else {
    echo "<script> location.href='../index.php';</script>";
}

if(isset($_REQUEST['studentpwdupdatebtn'])){
    if(($_REQUEST['studentnewpwd']=="")){
        $passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2"
        role="alert">Fill Pwd properly </div>';
    }else{
        $sql="SELECT * FROM student WHERE student_email='$studentemail'";
        $result=$conn->query($sql);
        if($result->num_rows==1){
            $studentpwd=$_REQUEST['studentnewpwd'];
            $sql="UPDATE student SET student_pwd='$studentpwd' WHERE
            student_email='$studentemail'";
            if($conn->query($sql)==TRUE){
                $passmsg='<div class="alert alert-success col-sm-6 ml-5 mt-2"
                role="alert">Password Changed Succesfully </div>';
            } else {
             $passmsg= '<div class="alert alert-warning col-sm-6 ml-5 mt-2"
        role="alert">Password change error </div>';
            }
        }
    }
}
?> 
            <div class="col-sm-9 col-md-10">
                <div class="row">
                    <div class="col-sm-6">
                        <form class="mt-5 mx-5" method="POST">
                        <div class="form-group">
                            <label for="inputemail">Email</label>
                            <input type="email" class="form-control"
                            id="inputemail" value="<?php echo $studentemail ?>" readonly>

                            <div class="form-group">
    <label for="inputnewpwd">New Password</label>
    <input type="password" class="form-control"
    id="inputnewpwd" placeholder="New Password" name="studentnewpwd">
</div>
<button type="submit" class="btn btn-primary mr-4 mt-4"
name="studentpwdupdatebtn">Update</button>
<button type="reset" class="btn btn-secondary mt-4">Reset</button>
<?php if(isset($passmsg)){echo $passmsg; }?>
</form>
</div>
</div>
</div>
</div>
</div>

<?php
include('footer.php');
?> 


