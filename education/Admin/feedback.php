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
    <p class="bg-dark text-white p-2">List of Feedback</p>
    <?php 
    $sql="SELECt * FROM feedback";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        echo '<table class="table">
        <thead>
        <tr>
        <th scope="col">Feedback ID</th>
        <th scope="col">Content</th>
        <th scope="col">Student ID</th>
        <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>';
        while($row=$result->fetch_assoc()){
            echo '<tr>';
                echo '<th scope="row">'.$row['f_id'].'</th>';
                echo '<td>'.$row['f_content'].'</td>';
                echo '<td>'.$row['student_id'].'</td>';
                echo '<td>';
                echo '
                  <form action ="" method="POST" class="d-inline">
                  <input type="hidden" name="id" value='.$row["f_id"].'>
                    <button type="submit" 
                    class="btn btn-danger"
                     name="delete" 
                     value="Delete">
                    <i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
                </tr>';
                } 
            echo '</tbody>
        </table>'; 
             } else {
            echo "0 Result";
        } 
        
        if(isset($_REQUEST['delete'])){
            $sql="DELETE FROM feedback WHERE f_id={$_REQUEST['id']}";
            if($conn->query($sql) == TRUE){
                echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
            } else{
                echo "unable to delete feeedback";
            }
        }
        ?>
     </div>
</div>
<div>

<?php
include('./admininclude/footer.php');
?> 