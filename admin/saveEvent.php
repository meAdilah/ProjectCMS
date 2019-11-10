<?php

	// Include database connection settings
	include('includes/config.php');
	
	
	if($_POST['evid']) {
		$evid = $_POST['evid'];
		$evdate = $_POST['evdate'];
		$evtitle = $_POST['evtitle'];
		$evvenue = $_POST['evvenue'];
		$evdesc = $_POST['evdesc'];
		
			// update data in mysql database 
			$result = $db->prepare("UPDATE event SET evdate='$evdate', evtitle='$evtitle', evvenue='$evvenue', evdesc='$evdesc'  WHERE evid='$evid'");
			$result->execute();

			// if successfully updated. 
			if($result){
				echo "<SCRIPT>alert('Successfully updated!');
				window.location.href='manageEvent.php';
				</SCRIPT>";
			}
			else {
				echo "<SCRIPT>alert('Error! Failed to update!');
				window.location.href='editEvent.php';
				</SCRIPT>";
			}
		}
?>