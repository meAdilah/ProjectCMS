<?php

include("includes/config.php");
	if(isset($_GET['adsid'])) {

	$adsid = $_GET['adsid'];

	$result = $db->prepare("DELETE FROM advertisement WHERE adsid = '".$_GET['adsid']."'");
	$result->execute();
	
	// run the SQL 
	if($result){
	echo "<SCRIPT>alert('Successfully deleted the advertisement');
			window.location.href='manageAds.php';
			</SCRIPT>";	

			}
		
	
	else {
		echo "<SCRIPT>alert('Error! Failed to to delete the comment!');
		window.location.href='manageAds.php';
		</SCRIPT>";
	}
	}
?>

