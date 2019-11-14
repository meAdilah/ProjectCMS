<?php
//include config
require_once('includes/config.php');
//process login form if submitted
if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];		
	$result = $db->prepare("SELECT level FROM members WHERE username = '".$_POST['username']."'");
	$result->execute();
		while ($row = $result->fetch(PDO::FETCH_ASSOC))
		{
		$level=$row['level']; 
		}	
		if($user->login($username,$password)){

		if($level == "0"){
			$_SESSION['username'] = $username;
			$_SESSION['login'] = true;
			$result = $db->prepare("SELECT * FROM profile WHERE username = '".$_SESSION['username']."'");
			$result->execute();
			while ($row = $result->fetch(PDO::FETCH_ASSOC))
			{
			$metricid=$row['metricid'];
			$_SESSION['metricid']=$metricid;
			} 
			header('Location: membershippayment.php');
			exit();
		}else if($level == "1"){
			$error[] = 'Your Account is pending for Approval. Please try again later.';
			
		}else if($level == "2"){
			$_SESSION['username'] = $username;
			$_SESSION['login'] = true;
			header('Location: memberpage/memberpage.php');
			exit();
			
		}else if($level == "3"){
			$_SESSION['username'] = $username;
			$_SESSION['login'] = true;
			header('Location: admin/adminpage.php');
			exit();
		}
	
	} else {
		$error[] = 'Wrong username or password.';
	}

		
	
}//end if submit

//define page title
$title = 'Login';
?>
<!DOCTYPE html>
<html>
<title>LOGIN FORM</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="w3css.css">
<link rel="stylesheet" type="text/css" href="w3css1.css">
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
  
  
<div class="container" align="center">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" action="" autocomplete="off">
				<h2>Login</h2>
				<p>Not a member? <a href='signup.php'>Sign Up</a></p>
				<hr>

				<?php
				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="bg-danger">'.$error.'</p>';
					}
				}

				
				?>

				<div class="form-group">
					<input type="text" name="username" id="username" placeholder="Username" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" tabindex="1" size="35">
				</div>
				<br>
				<div class="form-group">
					<input type="password" name="password" id="password"  placeholder="Password" tabindex="3" size="35">
				</div>
				<br>
				<div class="row">
					<div class="col-xs-9 col-sm-9 col-md-9">
						 <a href='reset.php'>Forgot your Password?</a>
					</div>
				</div>
				
				<hr>
				<div class="row">
					<button class="w3-button w3-white" name="submit" value="Login">Login</button>
				</div>
			</form>
		</div>
	</div>



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


