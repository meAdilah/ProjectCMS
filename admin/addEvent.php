<?php
	require('includes/config.php');
?>
<!DOCTYPE html>
<html>
<title>HOMEPAGE</title>
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
  
   <div class="content" style="padding:16px;">
		<!-- Editing Links -->
		<ul id="button" style="width:20%;float:right;height:40px;">
			<li style="float:right;width:50%;"><a href="http://localhost/studentoffcampus/admin/addEvent.php">ADD</a></li>
			<li style="float:right;width:50%;"><a href="http://localhost/studentoffcampus/admin/manageEvent.php">VIEW</a></li>
		</ul>
		<br><br>
		
		<div id="content">	
			<div class="add">	
				<fieldset>
					<legend><h2><b>ADD EVENT</b></h2></legend>
					<form name="adds" method="post" action="addEventProcess.php">
						<table  class="SignUp" border="0" width="600px" >
							<tr>
								<td><b><font color="red">*</font> DATE  </td>
								<td>: <input type="date" name="evdate" id="evdate" title="DATE" 
								size="25" required></td>
							</tr>
							<tr>
								<td><b><font color="red">*</font> EVENT TITLE  </td>
								<td>: <input type="text" name="evtitle" id="evtitle" title="EVENT TITLE" 
								size="75" required></td>
							</tr>
							<tr>
								<td><b><font color="red">*</font> VENUE  </td>
								<td>: <input type="text" name="evvenue" id="evvenue" title="VENUE" 
								size="75" required></td>
							</tr>
							<tr>
								<td><b><font color="red">*</font> EVENT DESCRIPTION  </td>
								<td>: <textarea name="evdesc" id="evdesc" title="EVENT DESCRIPTION" rows="10" cols="100" required></textarea></td>
							</tr>
							
							</table>
						<br>
							<input type="submit" name="add" value="ADD">&nbsp;&nbsp;
							<button type="reset" value="RESET">RESET</button></td>
					</form>
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
