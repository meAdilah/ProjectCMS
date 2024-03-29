<?php 
require("includes/config.php");
if(!$_SESSION['login']){
   header("location:../index.php");
   die;
}
?>
<!DOCTYPE html>
<html>
<title>EXPENSES</title>
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
<p><b>EXPENSES</b></p>
</div>
<div align="center">
<table width="50%" border="0" cellspacing="0" cellpadding="10">
<tr>
<td>
<form action="database/save_to_expenses.php" method="post"> 

Name:<br />
<input type="text" name="name" size="75" required><br />
<br />

Identification (IC):<br />
<input type="text" name="identification" size="25" required><br />
<br />

Date of Usage:<br />
<input type="date" name="dateofusage" size="25" required><br />
<br />

Total of Expenses Used(RM):<br />
<input type="text" name="totalusage" size="25" maxlength="4" required><br />
<br />
 
Description:<br />
<textarea type="text" name="description" rows="10" cols="100" required></textarea><br />
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