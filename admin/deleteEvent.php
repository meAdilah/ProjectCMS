<?php

include("includes/config.php");
	if(isset($_GET['evid'])) {

	$adsid = $_GET['evid'];

	$result = $db->prepare("DELETE FROM event WHERE evid = '".$_GET['evid']."'");
	$result->execute();
	
	// run the SQL 
	if($result){
	echo "<SCRIPT>alert('Successfully deleted the event');
			window.location.href='manageEvent.php';
			</SCRIPT>";	

			}
		
	
	else {
		echo "<SCRIPT>alert('Error! Failed to to delete the comment!');
		window.location.href='manageEvent.php';
		</SCRIPT>";
	}
	}
?>