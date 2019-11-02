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
 <div class="content" style="padding:16px;">
		<!-- Editing Links -->
		<ul id="button" style="width:20%;float:right;height:40px;">
			<li class="active" style="float:right;width:50%;"><a href="addads.php">ADD</a></li>
			<li style="float:right;width:50%;"><a href="manageads.php">VIEW</a></li>
		</ul>
		<br><br>
		
		<div id="content">	
			<div class="add">	
				<fieldset>
					<legend><h2><b>ADD ADVERTISEMENT</b></h2></legend>
					<form name="adds" method="post" action="saveAds.php">
						<input type="text" name="memberID" id="memberID" hidden>
							<?php
							$sql = $db->prepare("SELECT * FROM advertisement WHERE adsid = '".$_GET['adsid']."'");
							$sql->execute();
							while ($row = $sql->fetch(PDO::FETCH_ASSOC)){
							$adsid = $row["adsid"];
							$date = $row["adsdate"];
							$title = $row["adstitle"];
							$content = $row["adscontent"];
							}
							?>
						<table  class="SignUp" border="0" width="600px" >
							<input name="adsid" id="adsid" value="<?php echo $adsid ?>" hidden></input>
							<tr>
								<td><b><font color="red">*</font> DATE  </td>
								<td>: <input type="date" name="adsdate" id="adsdate" title="DATE" 
								size="25" value="<?php echo $date?>" readonly></input></td>
							</tr>
							<tr>
								<td><b><font color="red">*</font> TITLE  </td>
								<td>: <input type="text" name="adstitle" id="adstitle" title="TITLE" 
								size="75" value="<?php echo $title ?>" required></td>
							</tr>
							<tr>
								<td><b><font color="red">*</font> CONTENT  </td>
								<td>: <textarea name="adscontent" id="adscontent" title="CONTENT" rows="10" cols="100" required><?php echo $content ?></textarea></td>
							</tr>
							
							</table>
						<br>
							<input type="submit" name="add" value="SAVE">&nbsp;&nbsp;
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