<?php
	require('includes/config.php');
?>
<!DOCTYPE html>
<html>
<title>HOMEPAGE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="w3css.css">
<link rel="stylesheet" type="text/css" href="w3css1.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<?php require('includes/sidemenu.php');?>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
<?php require('includes/header.php');?>
 <div class="content" style="padding:16px;">
		<!-- Editing Links -->
		<ul id="button" style="width:20%;float:right;height:40px;">
			<li style="float:right;width:50%;"><a href="http://localhost/studentoffcampus/admin/addEvent.php">ADD</a></li>
			<li style="float:right;width:50%;"><a href="http://localhost/studentoffcampus/admin/manageEvent.php">VIEW</a></li>
		</ul>
		<br><br><br>
		
		<div id="content">	
			<div class="entry">	
				<?php
					//include('includes/config.php');
					
					if(isset($_SESSION['username'])){
						
						// Request the data
						$result = $db->prepare("SELECT * FROM event");
						$result->execute();
						if (!$result) {
							echo("<P>Error performing query: " .
								 mysqli_error() . "</P>");
							exit();
						}
					
				?>
				<table border = "1" border="2"  cellpadding="5" margin="10" >
				<colgroup>
					<col class = "one"/>
					<col class = "two"/>
					<col class = "three"/>
					<col class = "four"/>
					<col class = "five"/>
					<col class = "six"/>
				</colgroup>
				<tr>
				<?php
					
				print "<th> DATE</th>";
				print "<th> EVENT TITLE </th>";
				print "<th> EVENT VENUE</th>";
				print "<th> EVENT DESCRIPTION</th>";
				print "<th> EDIT</th>";
				print "<th> DELETE</th>";
				?>
				</tr>
				<tr>
				<?php
					while($row = $result->fetch(PDO::FETCH_ASSOC))
					{?>

				<?php
					"<a hidden>". $row["evid"]."</a>";
					echo "<td>". $row["evdate"] ."</td>";
					echo "<td>". $row["evtitle"] ."</td>";
					echo "<td>". $row["evvenue"] ."</td>";
					echo "<td>". $row["evdesc"] ."</td>";

				?>
				<td>
				<?php echo "<a href='editEvent.php?evid=" . $row['evid'] . "'>EDIT</a>";?>
				</td>
				<td>
				<?php echo "<a href='deleteEvent.php?evid=" . $row['evid'] . "'>DELETE</a>";?>
				</td>
				</tr>                                                        
					<?php
					} 
				?> </table>
				<?php
					} 
				?>
  
  </div> 
  

  

 

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

<?php require('includes/footer.php');?>
