<?php
require("config.php");
if(!$_SESSION['login']){
   header("location:../index.php");
   die;
}
if (isset($_GET['name'])){
$name = $_GET['name'];
$result = $db->prepare("DELETE FROM expenses WHERE name = '$name'");
$result->execute();
}
	echo "<script>
	alert('Expenses Successfully Deleted');
	window.location.href='../financialreport.php';
	</script>";

?>