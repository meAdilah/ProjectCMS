<?php
	// Include database connection settings
	include('../includes/config.php');
	
	//if(isset($_SESSION['username'])){
		
	if(isset($_POST['add'])){
	//collect the data with $_POST
	$username = $_SESSION['username'];
	$id = $_POST['adsid'];
	$date = $_POST['adsdate'];
	$title = $_POST['adstitle'];
	$content = $_POST['adscontent'];
	
	$stmt = $db->prepare("UPDATE advertisement SET  adstitle='$title', adscontent='$content', adsdate='$date' WHERE adsid='$id'");
	$stmt->execute(array(
				':username' => $username,
				':adsid' => $id,
				':adstitle' => $title,
				':adscontent' => $content,
				':adsdate' => $date,
			));
	
			// run the SQL 
			if($stmt){
				echo "<SCRIPT>alert('Successfully update into database!');
				window.location.href='manageads.php';
				</SCRIPT>";
			}
		
			else {
				echo "<SCRIPT>alert('Failed to update!');
				window.location.href='addads.php';
				</SCRIPT>";
			}
}
?>