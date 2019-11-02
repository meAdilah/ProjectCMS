<?php
	// Include database connection settings
	include('includes/config.php');
	
	//if(isset($_SESSION['username'])){
		
	if(isset($_POST['add'])){
	//collect the data with $_POST
	$evdate = $_POST['evdate'];
	$evtitle = $_POST['evtitle'];
	$evvenue = $_POST['evvenue'];
	$evdesc = $_POST['evdesc'];
	
	$stmt = $db->prepare('INSERT INTO event (evdate,evtitle,evvenue,evdesc) VALUES (:evdate, :evtitle, :evvenue, :evdesc)');
	$stmt->execute(array(
				':evdate' => $evdate,
				':evtitle' => $evtitle,
				':evvenue' => $evvenue,
				':evdesc' => $evdesc,
				
			));
	
			// run the SQL 
			if($stmt){
				echo "<SCRIPT>alert('Successfully add into database!');
				window.location.href='manageEvent.php';
				</SCRIPT>";
			}
		
			else {
				echo "<SCRIPT>alert('Failed to add!');
				window.location.href='addEvent.php';
				</SCRIPT>";
			}
}
?>