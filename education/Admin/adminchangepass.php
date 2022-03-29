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
$adminemail=$_SESSION['adminloginemail'];
if(isset($_REQUEST['adminpwdupdatebtn'])){
    if(($_REQUEST['adminpwd']=="")){
        $passmsg='<div class="alert alert-warning col-sm-6 ml-5 mt-2"
        role="alert">Fill Pwd properly </div>';
    }else{
        $sql="SELECT * FROM admin WHERE admin_email='$adminemail'";
        $result=$conn->query($sql);
        if($result->num_rows==1){
            $adminpwd=$_REQUEST['adminpwd'];
            $sql="UPDATE admin SET admin_pwd='$adminpwd' WHERE
            admin_email='$adminemail'";
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
            <div class="col-sm mt-5">
                <div class="row">
                    <div class="col-sm-6">
                        <form class="mt-5 mx-5">
                            <label for="inputemail">Email</label>
                            <input type="email" class="form-control"
                            id="inputemail" value="<?php echo $adminemail ?>" readonly>

<div class="form-group">
    <label for="inputnewpwd">New Password</label>
    <input type="text" class="form-control"
    id="inputnewpwd" placeholder="New Password" name="adminpwd">
</div>
<button type="submit" class="btn btn-danger mr-4 mt-4"
name="adminpwdupdatebtn">Update</button>
<button type="reset" class="btn btn-secondary mt-4">Reset</button>
<?php if(isset($passmsg)){echo $passmsg; }?>
</form>
</div>
</div>
</div>
</div>
</div>

<?php
include('./admininclude/footer.php');
?> 


