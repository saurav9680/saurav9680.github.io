<?php
if(!isset($_SESSION)){
    session_start();
}
include_once('../dbconnect.php');

//Admin login verify
if(!isset($_SESSION['is_admin_login'])){
if(isset($_POST['checkloginemail']) && isset($_POST['adminloginemail'])
&& isset($_POST['adminloginpwd'])){
$adminloginemail=$_POST['adminloginemail'];
$adminloginpwd=$_POST['adminloginpwd'];
$sql="SELECT admin_email, admin_pwd FROM admin WHERE admin_email='".$adminloginemail."' 
AND admin_pwd='".$adminloginpwd."'";

$result=$conn->query($sql);
$row=$result->num_rows;
if($row === 1){
    $_SESSION['is_admin_login']=true;
    $_SESSION['adminloginemail']= $adminloginemail;
    echo json_encode($row);

}else if($row === 0){
    echo json_encode($row);
}
}
}
?>