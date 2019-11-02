<?php
	// Include database connection settings
	include('../includes/config.php');
	
	//if(isset($_SESSION['username'])){
		
	if(isset($_POST['add'])){
	//collect the data with $_POST
	$username = $_SESSION['username'];
	$date = $_POST['adsdate'];
	$title = $_POST['adstitle'];
	$content = $_POST['adscontent'];
	
	$stmt = $db->prepare('INSERT INTO advertisement (username,adstitle,adscontent,adsdate) VALUES (:username, :adstitle, :adscontent, :adsdate)');
	$stmt->execute(array(
				':username' => $username,
				':adstitle' => $title,
				':adscontent' => $content,
				':adsdate' => $date,
			));
	
			// run the SQL 
			if($stmt){
				echo "<SCRIPT>alert('Successfully add into database!');
				window.location.href='../manageads.php';
				</SCRIPT>";
			}
		
			else {
				echo "<SCRIPT>alert('Failed to add!');
				window.location.href='../addads.php';
				</SCRIPT>";
			}
}
?>