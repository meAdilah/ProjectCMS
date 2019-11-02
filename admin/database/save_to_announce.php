<?php
require("../includes/config.php");

$ref= $_POST['ref'];
$date= $_POST['date'];
$title= $_POST['title'];
$description= $_POST['description'];



try {
    $sql = "INSERT INTO announce (ref, date, title, description)
 VALUES
('$ref', '$date', '$title', '$description')";
    $sth = $db->query($sql);
} catch(PDOException $e) {
    echo $e->getMessage();
}


	echo "<script>
	alert('Infomation Successfully Updated');
	window.location.href='../announcement.php';
	</script>";

 

?>