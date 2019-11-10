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

th {
    text-align: left;
    padding: 8px;
}
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
<table cellpadding="5" cellspacing="0" border="1" width="75%">
<br/>
<tr>
<td colspan="5" align="center"><b>MEMBERS LIST</b></td>
</tr>
<tr>
<th> Title</th>
<th> Date</th>
<th colspan="2"> Utilities</th>
</tr>
<?php
$result = $db->prepare("SELECT * FROM announce");
$result->execute();
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
$ref= $row['ref'];
$title= $row['title'];
$description= $row['description'];
$date= $row['date'];
echo "<tr>
<td>  $title </td>
<td>  $date </td>
<td>  <a href='editannouncement.php?ref=$ref'>Edit</a></td>
<td>  <a href='database/delete_from_announce.php?ref=$ref'>Delete</a></td>
</tr>";
} 

?>
<br>
<a href='addannouncement.php?ref=$ref'>Add Announcement</a>

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