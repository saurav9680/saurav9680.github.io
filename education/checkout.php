<?php
include('dbconnect.php');
session_start();
if(!isset($_SESSION['studentloginemail'])){
    echo "<script> location.href='index.php' </script>";
} else{
    header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
    $studentemail=$_SESSION['studentloginemail'];
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="GENERATOR" content="Evrsoft First Page">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!--FONT AWESOME CSS-->
    <link rel="stylesheet" href="css/all.min.css">
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <!--custom syyle css-->
    <link rel="stylesheet" href="css/style.css">

    <title>Checkout</title>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6 offset-sm-3 jumbotron">
            <h3 class="mb-5">E-Learning Paytm Gateway</h3>
<form method="post" action="./PaytmKit/pgRedirect.php">
		<div class="form-group row">
					<label for="ORDER_ID" class="col-sm-4 col-form-label">ORDER_ID:</label>
               <div class="col-sm-8">
                   <input id="ORDER_ID" class="form-control" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORD" . rand(10000,900000000)?>" readonly>
                    </div>
                    </div>
                    <div class="form-group row">
					<label for="CUST_ID" class="col-sm-4 col-form-label">Student Email </label>
                    <div class="col-sm-8">
					<input id="CUST_ID" class="form-control" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php if(isset($studentemail))
                    {echo $studentemail; }?>" readonly>
				</div>
</div>

<div class="form-group row">
<label for="TXN_AMOUNT" class="col-sm-4 col-form-label">Amount</label>
<div class="col-sm-8">
					<input title="TXN_AMOUNT" class="form-control" tabindex="10"
						type="text" name="TXN_AMOUNT" value="<?php if(isset($_POST['id'])){echo $_POST['id']; }?>" readonly>
					</div>
</div>

<div class="form-group row">
<div class="col-sm-8">
					<input type="hidden" id="INDUSTRY_TYPE_ID" class="form-control" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" readonly>
</div>
</div>
<div class="form-group row">
<div class="col-sm-8">
					<input type="hidden" id="CHANNEL_ID" class="form-control" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" readonly>
</div>
</div>
<div class="text-center">
    <input value="Checkout" type="submit" class="btn btn-primary" onclick="">
    <a href="./courses.php" class="btn btn-secondary">Cancel</a>
</div>
</form>
	<small class="form-text text-muted">Note: Complete Payment by clicking checkout button</small>
</di>
</div>
</div>		
</body>
</html>

<?php }

?>