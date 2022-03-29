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

?> 

<div class="col-sm-9 mt-5">
        <!--tablecontent-->
        <p class="bg-dark text-white p-2">Students List</p>
        <?php
        $sql="SELECT * FROM student";
        $result=$conn->query($sql);
        if($result->num_rows>0){
        ?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
               <?php while($row=$result->fetch_assoc()){ 
                echo '<tr>';
                echo '<th scope="row">'.$row['student_id'].'</th>';
                echo '<td>'.$row['student_name'].'</td>';
                echo '<td>'.$row['student_email'].'</td>';
                echo '<td>';
                echo '
                <form action ="editstudent.php" method="POST" class="d-inline">
                <input type="hidden" name="id" value='.$row["student_id"].'>
                <button type="submit" 
                    class="btn btn-info mr-3 "
                     name="view" 
                     value="View">
                     <i class="fa-solid fa-pen"></i>
                     </button>
                     </form>

                  <form action ="" method="POST" class="d-inline">
                  <input type="hidden" name="id" value='.$row["student_id"].'>
                    <button type="submit" 
                    class="btn btn-danger"
                     name="delete" 
                     value="Delete">
                    <i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
                </tr>';
                } ?>
            </tbody>
        </table> 
        <?php } else {
            echo "0 Result";
        } 
        
        if(isset($_REQUEST['delete'])){
            $sql="DELETE FROM student WHERE student_id={$_REQUEST['id']}";
            if($conn->query($sql) == TRUE){
                echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
            } else{
                echo "unable to delete Student";
            }
        }
        
        
        
        ?>
     </div>
</div>
<div>
    <a class="btn btn-danger box" href="./addnewstudent.php"><i class="fas fa-plus fa-2x"></i>
</a>
</div>
</div>
<?php
include('./admininclude/footer.php');
?> 