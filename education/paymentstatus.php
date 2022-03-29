<?php
include('./include/header.php')
?>
    <!--banner-->
    <div class="container-fluid bg-dark">
        <div class="row">
            <img src="./img/coursebanner.jpg" alt="courses"
            style="height:500px;width:100%;object-fit:cover;
            box-shadow:10px;"/>
            </div>
</div>
<!--banner end-->
<!--status of pmnt content-->
<div class="container">
    <h2 class="test-center my-4">Payment Status</h2>
    <form method="post" action="">
        <div class="form-group row">
            <label class="offset-sm-3 col-form-label">Order ID: </label>
            <div>
                <input type="text" class="form-control mx-3">
</div>
<div>
    <input type="submit" class="btn btn-primary mx-4" value="view">
</div>
</div>
</form>
</div>
<!--pmnt status form content end-->
<!--contact us start-->
<?php
    include('./contact.php')
    ?>
<!--end contact us-->
<!--Footer start-->
<?php
    include('./include/footer.php')
?>
<!--Footer End-->