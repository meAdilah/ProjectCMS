<?php
require("../includes/config.php");
$name= $_POST['name'];
$identification= $_POST['identification'];
$dateofdonation= $_POST['dateofdonation'];
$totaldonation= $_POST['totaldonation'];
$receiptnum= $_POST['receiptnum'];



try {
    $sql = "INSERT INTO donation (name, identification, dateofdonation, totaldonation, receiptnum)
 VALUES
('$name', '$identification', '$dateofdonation', '$totaldonation', '$receiptnum')";
    $sth = $db->query($sql);
} catch(PDOException $e) {
    echo $e->getMessage();
}

echo "<script>
window.location.href='../financialreport.php';
</script>";
?>