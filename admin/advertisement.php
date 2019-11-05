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
	
	$result = $db->prepare("SELECT * FROM advertisement");
	$result->execute();

?>
  <div class="content" style="padding:16px;">
		<fieldset style=" background-color:white;">
			<legend style="font-size:25px; color:#e69900;"><b>Club Advertisement</b></legend>
				<table cellpadding="5" margin="10" >
				<tr>
				<?php
					while ($row = $result->fetch(PDO::FETCH_ASSOC))
					{?>

				<?php
					"<a hidden>". $row["adsid"]."</a>";
					echo "<td>". $row["adsdate"] ."</td>";
					echo "<td>". $row["adstitle"] ."</td>";
					echo "<td><a href='callContent.php?adsid=" . $row['adsid'] . "'>Read More</a></td>"; 
					echo "</tr>";
					}
				?> 
				
				</table>
		</fieldset>
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
