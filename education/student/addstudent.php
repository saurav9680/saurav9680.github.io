<?php
if(!isset($_SESSION)){
    session_start();
}
include_once('../dbconnect.php');
//check email in db
if(isset($_POST['checkemail']) && isset($_POST['studentemail'])){
    $studentemail=$_POST['studentemail'];
    $sql="SELECT student_email FROM student WHERE student_email= '".
    $studentemail."'";
    $result=$conn->query($sql);
    $row= $result->num_rows;
    echo json_encode($row);
}



//insert students
if(isset($_POST['studentsignup'])&& isset($_POST['studentname']) && isset($_POST['studentemail']) && isset($_POST['studentpwd'])){

    $studentname= $_POST['studentname'];
    $studentemail= $_POST['studentemail'];
    $studentpwd= $_POST['studentpwd'];

    $sql = "INSERT INTO student(student_name,student_email,student_pwd) VALUES
    ('$studentname','$studentemail','$studentpwd')";

    if($conn->query($sql) == TRUE){
        echo json_encode("OK");
    }else {
        echo json_encode("Failed");
    }
}
//student login verify
if(!isset($_SESSION['is_login'])){
if(isset($_POST['checkloginemail']) && isset($_POST['studentloginemail'])
&& isset($_POST['studentloginpwd'])){
$studentloginemail=$_POST['studentloginemail'];
$studentloginpwd=$_POST['studentloginpwd'];
$sql="SELECT student_email, student_pwd FROM student WHERE student_email='".$studentloginemail."' 
AND student_pwd='".$studentloginpwd."'";
$result=$conn->query($sql);
$row=$result->num_rows;
if($row === 1){
    $_SESSION['is_login']=true;
    $_SESSION['studentloginemail']= $studentloginemail;
    echo json_encode($row);

}else if($row === 0){
    echo json_encode($row);
}
}
}


?>