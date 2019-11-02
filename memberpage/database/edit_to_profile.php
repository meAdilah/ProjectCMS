<?php

if(isset($_POST['submit']))
{
require("../includes/config.php");
$username= $_SESSION['username'];
$name= $_POST['name'];
$metricid= $_POST['metricid'];
$phoneno= $_POST['phoneno'];
$email= $_POST['email'];
$address= $_POST['address'];
$postcode= $_POST['postcode'];
$city= $_POST['city'];
$state= $_POST['state'];
$residing= $_POST['residing'];

	
$result = $db->prepare("UPDATE profile SET name='".$name."', metricid='".$metricid."', phoneno='".$phoneno."', email='".$email."', address='".$address."', postcode='".$postcode."', city='".$city."', state='".$state."', residing='".$residing."'  WHERE username = '".$_SESSION['username']."'");
$result->execute();
	echo "<script>
	alert('Infomation Successfully Updated');
	window.location.href='../viewprofile.php';
	</script>";

}

?>