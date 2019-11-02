<?php
require("../includes/config.php");
$name= $_POST['name'];
$identification= $_POST['identification'];
$dateofusage= $_POST['dateofusage'];
$totalusage= $_POST['totalusage'];
$description= $_POST['description'];



try {
    $sql = "INSERT INTO expenses (name, identification, dateofusage, totalusage, description)
 VALUES
('$name', '$identification', '$dateofusage', '$totalusage', '$description')";
    $sth = $db->query($sql);
} catch(PDOException $e) {
    echo $e->getMessage();
}

echo "<script>
window.location.href='../financialreport.php';
</script>";

?>