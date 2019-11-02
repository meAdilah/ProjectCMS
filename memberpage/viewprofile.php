<?php 
require("includes/config.php");
if(!$_SESSION['login']){
   header("location:../index.php");
   die;
}
?>
<!DOCTYPE html>
<html>
<title>FUND MANAGEMENT</title>
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
<?php
$result = $db->prepare("SELECT * FROM profile WHERE username = '".$_SESSION['username']."'");
$result->execute();
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
$name= $row['name'];
$metricid= $row['metricid'];
$phoneno= $row['phoneno'];
$email= $row['email'];
$address= $row['address'];
$postcode= $row['postcode'];
$city= $row['city'];
$state= $row['state'];
$residing= $row['residing'];
} 
?>

<br/>
<div align="center">
<table cellpadding="5" cellspacing="0" border="1" width="75%">
<br/>
<tr>
<td colspan="2" align="center"><b>PROFILE</b></td>
</tr>
<tr>
<th> Name:</th>
<td> <?php echo $name; ?></td>
</tr>

<tr>
<th> Metric ID:</th>
<td> <?php echo $metricid; ?></td>
</tr>

<tr>
<th> Phone Number:</th>
<td> <?php echo $phoneno; ?></td>
</tr>

<tr>
<th> Email:</th>
<td> <?php echo $email; ?></td>
</tr>

<tr>
<th> Address:</th>
<td> <?php echo $address; ?></td>
</tr>


<tr>
<th> Postcode:</th>
<td> <?php echo $postcode; ?></td>
</tr>

<tr>
<th> City:</th>
<td> <?php echo $city; ?></td>
</tr>

<tr>
<th> State:</th>
<td> <?php echo $state; ?></td>
</tr>

<tr>
<th> Residing:</th>
<td> <?php echo $residing; ?></td>
</tr>
</table>
</div>

<div align="center">
<table width="75%">
<tr>
<td align="right">
<a href="editprofile.php">Edit Profile</a>
</td>
</tr>
</table>
</div>
<br/>
 

  

 

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