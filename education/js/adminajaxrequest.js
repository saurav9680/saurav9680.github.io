function checkadminlogin(){
    var adminloginemail=$("#adminloginemail").val();
    var adminloginpwd=$("#adminloginpwd").val();
    $.ajax({
        url:'Admin/admin.php',
        method:'POST',
        data:{
            checkloginemail: "checkloginmail",
            adminloginemail : adminloginemail,
            adminloginpwd : adminloginpwd,
        },
        success: function(data){
            console.log(data)
            if(data == 0){
                $("#statusadminloginmsg").html('<small class="alert alert-danger">Inavlid Admin Credentials</small>');
            }else if(data==1){
                $("#statusadminloginmsg").html(
                    '<small class="alert alert-success">Logged IN ....</small>');
                    setTimeout(() => {
                        window.location.href="Admin/AdminDashboard.php";
                    }, 1000);
            }
        },
    });
}