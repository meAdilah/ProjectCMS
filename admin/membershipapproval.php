<?php
require("includes/config.php");
if (isset($_GET['username'])){
$username = $_GET['username'];
$metricid=$_SESSION['metricid'];
$result = $db->prepare("UPDATE members SET level='2' WHERE username = '$username'");
$result->execute();
$result = $db->prepare("UPDATE profile SET status='Approved' WHERE username = '$username'");
$result->execute();

echo "<script>
window.location.href='viewprofile.php?metricid=$metricid';
</script>";
}
?>