$(document).ready(function(){
    //unique email id verification
    $("#studentemail").on("keypress blur",function(){
        var studentemail=$("#studentemail").val();
        $.ajax({
            url:'student/addstudent.php',
            method:'POST',
            data: {
                checkemail: "checkemail",
                studentemail:studentemail,
            },
            success:function(data){
                //console.log(data);
                if(data!=0){
                    $("#statusmsg2").html('<small style="color:red;"> This E-Mail is Already Registered.</small>');
                    $("#signup").attr("disabled",true);
                } else if(data == 0){
                    $("#signup").attr("disabled",false);
                } 
            },
        });
    });
});
/* Good to go console.log(data);
if(data!=0){
    $("#statusmsg2").html('<small style="color:red;"> THis E-Mail is Already Registered.</small>');
    $("#signup").attr("disabled",true);
} else if(data == 0 && reg.test(studentemail)){
    $("#statusmsg2").html('<small style="color:green;">Good to go </small>');
    $("#signup").attr("disabled",false);
} else if (!reg.test(studentemail)) {
    $("#statusmsg2").html('<small style="color:red;"> Please Enter Valid E-Mail Address </small>');
    $("#signup").attr("disabled",false);
}*/



function addstudent(){
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var studentname=$("#studentname").val();
    var studentemail=$("#studentemail").val();
    var studentpwd=$("#studentpwd").val();
//form data chechk
if(studentname.trim()==""){
    $("#statusmsg1").html('<small style="color:red;">Please Enter Name </small>');
    $("#studentname").focus();
    return false;
}else if(studentemail.trim()==""){
    $("#statusmsg2").html('<small style="color:red;"> Please Enter E-Mail </small>');
    $("#studentemail").focus();
    return false;
}else if(studentemail.trim() != "" && !reg.test(studentemail)){
    $("#statusmsg2").html('<small style="color:red;"> Please enter valid email e.g. example@gmail.com</small>');
    $("#studentmeail").focus();
    return false;
} else if(studentpwd.trim()==""){
    $("#statusmsg3").html('<small style="color:red;"> Please Enter valid password </small>');
    $("#studentpwd").focus();
    return false;
} else{
     $.ajax({
        url:'student/addstudent.php',
        method: "POST",
        dataType:"json",
        data:{
            studentsignup: "studentsignup",
            studentname: studentname,
            studentemail: studentemail,
            studentpwd: studentpwd,
        },
        success:function(data){
            console.log(data)
            if(data== "OK"){
                $('#successmsg').html("<span class='alert alert-success'>Account Successfully created !</span>");
                clearstudentsignupfield();
            } else if(data == "Failed"){
                $('#successmsg').html("<span class='aler alert-danger'>Unable to create account contact support </span>");
            }
        }
    })
}
}
//Signup form empty after signup
function clearstudentsignupfield(){
    $("#studentsignupform").trigger("reset");
    $("#statusmsg1").html(" ");
    $("#statusmsg2").html(" ");
    $("#statusmsg3").html(" ");
    
}

//student login verification
function checkstudentlogin(){
    var studentloginemail=$("#studentloginemail").val();
    var studentloginpwd=$("#studentloginpwd").val();
    $.ajax({
        url:'student/addstudent.php',
        method:'POST',
        data:{
            checkloginemail: "checkloginmail",
            studentloginemail : studentloginemail,
            studentloginpwd : studentloginpwd,
        },
        success: function(data){
            if(data == 0){
                $("#statusloginmsg").html('<small class="alert alert-danger">Inavlid Credentials</small>');
            }else if(data==1){
                $("#statusloginmsg").html(
                    '<div class="spinner-border text-success" role="status"></div>');
                    setTimeout(() => {
                        window.location.href="index.php";
                    }, 1000);
            }
        },
    });
}
