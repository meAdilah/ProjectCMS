<?php
require("config.php");
if(!$_SESSION['login']){
   header("location:../index.php");
   die;
}
if (isset($_GET['ref'])){
$ref = $_GET['ref'];
$result = $db->prepare("DELETE FROM announce WHERE ref = '$ref'");
$result->execute();
}
	echo "<script>
	alert('Announcement Successfully Deleted');
	window.location.href='../announcement.php';
	</script>";

?>