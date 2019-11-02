<?php 
require("includes/config.php");
if(!$_SESSION['login']){
   header("location:../index.php");
   die;
}
?>
<!DOCTYPE html>
<html>
<title>MEMBERS PAGE</title>
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
<br/>
<div align="center">
<table cellpadding="0" cellspacing="10" border="0" width="75%">
<tr>
<td>
Members List
<br>
<a href="memberlist.php"><img src="image/members.png" style="width:150px; height:150px" title="Members" alt="Members"></a>
</td>
</tr>
<tr>
<td>
Funds Management
<br>
<a href="donation.php"><img src="image/dollar.png" style="width:150px; height:150px" title="Fund" alt="Fund"></a>
</td>
<td>
Expenses Management
<br>
<a href="expenses.php"><img src="image/expenses.png" style="width:150px; height:150px" title="Expenses" alt="Expenses"></a>
</td>
<td>
Financial Report
<br>
<a href="financialreport.php"><img src="image/report.png" style="width:150px; height:150px" title="Report" alt="Report"></a>
</td>
</tr>
<tr>
<td>
Announcements
<br>
<a href="announcement.php"><img src="image/announcement.png" style="width:150px; height:150px" title="Announcement" alt="Announcement"></a>
</td>
<td>
Events
<br>
<a href="event.php"><img src="image/event.png" style="width:150px; height:150px" title="Event" alt="Event"></a>
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