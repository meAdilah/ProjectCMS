<!DOCTYPE html>
<html>
<title>ABOUT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="w3css.css">
<link rel="stylesheet" type="text/css" href="w3css1.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<?php require('includes/sidemenu.php');?>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">
	
	

  <!-- Header -->
<?php require('includes/header.php');?>
  <!-- Content -->
  <div class="content" style="padding:16px;">
    <fieldset style="background-color: white;";>
      <legend style="font-size:25px; color: #e69900;"><b>About Us</b></legend>
    <h2 style="color: #e69900;"><b>Introduction</b></h2>
    <p>UMP-FSKKP Student Off-Campus is a website that manage the information of UMP-FSKKP students who residing off- campus. We provide our students with information for living off-campus and some resources to support the student’s search for housing. All announcement and important event will be informed through this website. We also provide space for student to advertise any available house/room which may help other student who live off-campus to get better accommodation.
    </p>

    <h2 style="color: #e69900;"><b>History</b></h2>
    <p>Department of Student Affairs & Alumni (SAffAD), Universiti Malaysia Pahang (UMP) Founded in 2002.
    SAffAD is responsible for managing the welfare and development of students to support the vision, mission, philosophy and core values ​​of the University.
    </p></fieldset>

    <fieldset style="background-color: white;">
    <legend style="font-size:25px; color: #e69900;"><b>Organization Chart</b></legend>
    <div class="w3-row-padding ">
    <img src="image/carta.jpg" alt="carta" style="width:100%">
    </div>
    </fieldset>


		<fieldset style="background-color: white;">
			<legend style="font-size:25px; color: #e69900;"><b>Our Team</b></legend>
				<div class="w3-row-padding ">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="image/st.png" alt="staff1" style="width:100%">
      <h3>Khairy Jamaluddin</h3>
      <p class="w3-opacity">Director, Residential Life</p>
      <p style="color: #e69900">khairyj@ump.edu.my</p>
      <p style="color: black;">09-424 5056</p>
      
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="image/st1.png" alt="staff2" style="width:100%">
      <h3>Aziz Harun</h3>
      <p class="w3-opacity">Assistant Director, Student</p>
      <p style="color: #e69900">azizhk@ump.edu.my</p>
      <p style="color: black;">09-424 5052</p>
      
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="image/st2.png" alt="staff3" style="width:100%">
      <h3>Selena Gomez</h3>
      <p class="w3-opacity">Assistant Director, Residential Wellness</p>
      <p style="color: #e69900">selena@ump.edu.my</p>
      <p style="color: black;">09-424 5053</p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="image/st3.png" alt="staff4" style="width:100%">
      <h3>Janna Nick</h3>
      <p class="w3-opacity">Assistant Director, Faculty Programs</p>
      <p style="color: #e69900">jannanick@ump.edu.my</p>
      <p style="color: black;">09-424 5054</p>   
    </div>

    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="image/st.png" alt="staff5" style="width:100%">
      <h3>Ahmad Albab</h3>
      <p class="w3-opacity">Assistant Director, Faculty Programs</p>
      <p style="color: #e69900">albab@ump.edu.my</p>
      <p style="color: black;">09-424 5055</p>   
    </div>

    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="image/st2.png" alt="staff6" style="width:100%">
      <h3>Syaza Syahira</h3>
      <p class="w3-opacity">Senior Manager, Housing Services</p>
      <p style="color: #e69900">syaza@ump.edu.my</p>
      <p style="color: black;">09-424 5057</p>
    </div>
  </div>
 </fieldset>
  
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
