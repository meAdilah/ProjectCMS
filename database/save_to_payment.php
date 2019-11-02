<?php
$receiptnum = $totalpayment ="";
$receiptnumErr = $totalpaymentErr = "";
$valid = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$valid = true;
  
  if (empty($_POST["receiptnum"])) {
    $receiptnumErr = "Required";
	$valid = false;
  } else {
    $receiptnum = test_input($_POST["receiptnum"]);
  }
  
  if (empty($_POST["totalpayment"])) {
    $totalpaymentErr = "Required";
	$valid = false;
  } else {
    $totalpayment = test_input($_POST["totalpayment"]);
  }
  

if ($valid){
$metricid= $_SESSION['metricid'];
$dateofpayment= $_POST['dateofpayment'];
$totalpayment= $_POST['totalpayment'];
$receiptnum= $_POST['receiptnum'];



try {
    $sql = "INSERT INTO payment (metricid, dateofpayment, totalpayment, receiptnum)
 VALUES
('$metricid', '$dateofpayment', '$totalpayment', '$receiptnum')";
    $sth = $db->query($sql);
} catch(PDOException $e) {
    echo $e->getMessage();
}

$result = $db->prepare("UPDATE members SET level='1' WHERE username = '".$_SESSION['username']."'");
$result->execute();

echo "<script>
window.location.href='viewpayment.php';
</script>";
}
 
}

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>