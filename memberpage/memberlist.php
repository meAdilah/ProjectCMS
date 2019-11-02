<?php 
require("includes/config.php");
if(!$_SESSION['login']){
   header("location:../index.php");
   die;
}
?>
<!DOCTYPE html>
<html>
<title>MEMBERLIST</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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

Search: <input type="text" class="myInput" id="myInput" onkeyup="myFunction()" placeholder="Name.." title="Type in a name"><br>
<br/>
<div align="center">
<table cellpadding="5" cellspacing="0" border="1" width="75%" id="myTable" class="myTable">
<br/>
<tr>
<td colspan="5" align="center"><b>MEMBERS LIST</b></td>
</tr>
<tr>
<th> Name</th>
<th> Metric ID</th>
<th> Phone Number</th>
<th> Email</th>
<th> Residing</th>
</tr>

<?php
$result = $db->prepare("SELECT * FROM profile");
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

echo "<tr>
<td>  <a href='viewprofile.php?metricid=$metricid'>$name </a></td>
<td>  $metricid </td>
<td>  $phoneno </td>
<td>  $email</td>
<td>  $residing</td>
</tr>";
} 
?>


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
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

<?php require('includes/footer.php');?>