<!DOCTYPE html>
<html>
<title>E-ADVERTISEMENT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="w3css.css">
<link rel="stylesheet" type="text/css" href="w3css1.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
}

li {
    float: left;
}

li a {
    display: block;
    color: #e0e0d1;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: grey;
}

.active {
    background-color: #e69900;
}
</style>
<?php 

	if(isset($_SESSION['username'])){
	
	$result = $db->prepare("SELECT username FROM advertisement WHERE username = '".$_SESSION['username']."'");
	$result->execute();
	while ($row = $result->fetch(PDO::FETCH_ASSOC)){
		$user = $row["username"];
		$id = $row["memberID"];
	}
	}
?>

<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="image/avatar.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b>STUDENT NAME</b></h4>
    <p class="w3-text-grey">Student Off-Campus </p>
  </div>
  <div class="w3-bar-block">
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>Personal Info</a> 
    <a href="http://localhost/studentoffcampus/manageAds.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>Manage E-Advertisement</a>
	<a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>Finance Info</a>
	<a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>Log Out</a>
  </div>

</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">
	
	

  <!-- Header -->
  <header id="portfolio">
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>UMP-FSKKP Student Off-Campus </b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <ul>
		<li><a href="http://localhost/studentoffcampus/index.php">Home</a></li>
		<li><a class="active" href="http://localhost/studentoffcampus/ads.php">E-Advertisement</a></li>
		<li><a href="http://localhost/studentoffcampus/event.php">Event</a></li>
		<li><a href="http://localhost/studentoffcampus/about.html">About Us</a></li>
		<li><a href="http://localhost/studentoffcampus/contact.html">Contact Us</a></li>
	  </ul>
	</div>
    </div>
  </header>
  
  <div class="content" style="padding:16px;">
		<!-- Editing Links -->
		<ul id="button" style="width:20%;float:right;height:40px;">
			<li style="float:right;width:50%;"><a href="http://localhost/studentoffcampus/addEvent.php">ADD</a></li>
			<li style="float:right;width:50%;"><a href="http://localhost/studentoffcampus/manageEvent.php">VIEW</a></li>
		</ul>
		<br><br>
		
		<div id="content">	
			<div class="add">	
				<fieldset>
					<legend><h2><b>ADD EVENT</b></h2></legend>
					<form name="adds" method="post" action="saveEvent.php">
					<?php
							include("includes/config.php");
							$sql = $db->prepare("SELECT * FROM event WHERE evid = '".$_GET['evid']."'");
							$sql->execute();
							while ($row = $sql->fetch(PDO::FETCH_ASSOC)){
							$evid = $row["evid"];
							$evdate = $row["evdate"];
							$evtitle = $row["evtitle"];
							$evvenue = $row["evvenue"];
							$evdesc = $row["evdesc"];
							}
					?>
						<table  class="SignUp" border="0" width="600px" >
							<input name="evid" id="evid" value="<?php echo $evid ?>" hidden></input>
							<tr>
								<td><b><font color="red">*</font> DATE  </td>
								<td>: <input type="date" name="evdate" id="evdate" title="DATE" 
								size="25" value="<?php echo $evdate?>" required></td>
							</tr>
							<tr>
								<td><b><font color="red">*</font> EVENT TITLE  </td>
								<td>: <input type="text" name="evtitle" id="evtitle" title="EVENT TITLE" 
								size="75" value="<?php echo $evtitle?>" required></td>
							</tr>
							<tr>
								<td><b><font color="red">*</font> VENUE  </td>
								<td>: <input type="text" name="evvenue" id="evvenue" title="VENUE" 
								size="75" value="<?php echo $evvenue?>" required></td>
							</tr>
							<tr>
								<td><b><font color="red">*</font> EVENT DESCRIPTION  </td>
								<td>: <textarea name="evdesc" id="evdesc" title="EVENT DESCRIPTION" rows="10" cols="100" required><?php echo $evdesc?></textarea></td>
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
</body>
</html>