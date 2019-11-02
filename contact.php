<!DOCTYPE html>
<html>
<title>CONTACT US</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="w3css.css">
<link rel="stylesheet" type="text/css" href="w3css1.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


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
		<fieldset style="background-color: white;">
			<legend style="font-size:25px; color: #e69900;"><b>Contact Us</b></legend>
    <table>
      <tr>
      <td><h3><b>UMP Pekan</b></h3></td>
      </tr>

      <tr>
      <td>Universiti Malaysia Pahang</td>
      </tr>

      <tr>
      <td>26600 Pekan Pahang</td>
      </tr>

      <tr>
      <td>Tel: +609-4245000</td>
      </tr>

      <tr>
      <td>Fax: +609-4245055</td>
      </tr>
      
      <tr>
      <td>Email: pro@ump.edu.my</td>
      </tr>
    </table>
<hr>
    <table>
      <tr>
      <th><h3><b>Gambang Campus</b></h3></th>
      </tr>

      <tr>
      <td>Universiti Malaysia Pahang</td>
      </tr>

      <tr>
      <td>Lebuhraya Tun Razak</td>
      </tr>

      <tr>
      <td>26300 Gambang, Kuantan</td>
      </tr>
      
      <tr>
      <td>Pahang Darul Makmur</td>
      </tr>

      <tr>
        <td> </td>
      </tr>
    </table>
  </fieldset>

  <fieldset style="background-color: white; width: 100%;">
      <legend style="font-size:25px; color: #e69900;"><b>Location</b></legend>
      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">

        <table style="width: 100%; padding:15px; text-align: center; margin: 30px;">
          <tr><th><h3><b>UMP Pekan</b></h3></th>
          <th><h3><b>Gambang Campus</b></h3></th>
          </tr>
          
         
          <tr>
           <td>Coordinate</td>
           <td>Coordinate</td>
          </tr>

          <tr>
            <td>3.546709-103.435332 </td>
            <td>3.718491-103.120784</td>
          </tr>

          <tr>
            <td><a target="_blank" href="https://www.google.com/maps/place/Universiti+Malaysia+Pahang/@3.5437072,103.4267173,811m/data=!3m1!1e3!4m12!1m6!3m5!1s0x31cf513f26ae4061:0x1932c42255a897a0!2sUniversiti+Malaysia+Pahang!8m2!3d3.5437018!4d103.428906!3m4!1s0x31cf513f26ae4061:0x1932c42255a897a0!8m2!3d3.5437018!4d103.428906" class="w3-button w3-black">VIEW MAP</a>
            </td>

            <td><a target="_blank" href="https://www.google.com/maps/place/UMP+Gambang+Campus/@3.7245219,103.1215782,829m/data=!3m1!1e3!4m6!3m5!1s0x31c8cbd67ac8885b:0x650cea81bf5c1963!4b1!8m2!3d3.7233012!4d103.1214599" class="w3-button w3-black">VIEW MAP</a>
            </td>
          </tr>
         

        </table>
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
