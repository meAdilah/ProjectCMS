<?php
if (isset($_GET['ref'])){
$ref = $_GET['ref'];
$_SESSION['ref']=$ref;
$result = $db->prepare("SELECT * FROM announce WHERE ref = '$ref'");
$result->execute();
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
$ref= $row['ref'];
$title= $row['title'];
$description= $row['description'];
$date= $row['date'];
} 
}

if  (isset($_POST['submit'])){
require("../includes/config.php");
$date= $_POST['date'];
$title= $_POST['title'];
$description= $_POST['description'];



$result = $db->prepare("UPDATE announce SET date='".$date."', title='".$title."', description='".$description."'  WHERE ref = '".$_SESSION['ref']."'");
$result->execute();
echo "Infomation Successfully Updated";
	echo "<script>
	alert('Infomation Successfully Updated');
	window.location.href='../announcement.php';
	</script>";

}
?>