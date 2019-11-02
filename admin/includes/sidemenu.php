<?php
$result = $db->prepare("SELECT * FROM members WHERE username = '".$_SESSION['username']."'");
$result->execute();
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
$adname= $row['username'];
}
?>
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="image/avatar.png" style="width:45%;" class="w3-round"><br><br>
    <h4><b><?php echo $adname?></b></h4>
    <p class="w3-text-grey">Club Management (ADMIN) </p>
  </div>
  <div class="w3-bar-block">
    <a href="financialreport.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw w3-margin-right"></i>Finance Info</a> 
	<a href="manageads.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-newspaper-o fa-fw w3-margin-right"></i>Manage E-Advertisement</a>
	<a href="../logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-times fa-fw w3-margin-right"></i>Log Out</a>
  </div>

</nav>
