<?php 
require("includes/config.php");

include_once("database/save_to_payment.php"); 
?>
<!DOCTYPE html>
<html>
<title>MEMBERSHIP PAYMENT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="w3css.css">
<link rel="stylesheet" type="text/css" href="w3css1.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<?php require('includes/sidemenu.php');?>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
<?php require('includes/header.php');?>
<div align="center">
<p><b>MEMBERSHIP PAYMENT</b></p>
</div>
<div align="center">
<table width="50%" border="0" cellspacing="0" cellpadding="10">
<tr>
<td>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 

Date of Payment:<br />
<input type="date" name="dateofpayment" value="<?php echo $dateofpayment;?>"><br />
<br />

Total Payment(RM):<br />
<input type="text" name="totalpayment" value="<?php echo $totalpayment;?>"><br />
<span class="error"> <?php echo $totalpaymentErr;?></span>
<br />
 
Receipt Number:<br />
<input type="text" name="receiptnum" value="<?php echo $receiptnum;?>"><br />
<span class="error"> <?php echo $receiptnumErr;?></span>
<br />

<div align="center">
<button class="w3-button w3-white" name="submit" value="Submit">Submit</button>
</div>
</form>
</td>
</tr>
</table>
</div>

 

<script>
// Script to open and close sidebar
// comment
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

<?php require('includes/footer.php');?>
