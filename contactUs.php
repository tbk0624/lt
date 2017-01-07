<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>LT Terrassement</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/styles.css">


</head>

<body>
<!------------------------Call Us------------------------>
<div id="wrapper">
		
		<div id="callout">
			<p><b><strong>Book a free estimate today<br class="brbreak1"> (514)-814-0020 <br class="brbreak2">or <br class="brbreak2">(438)-884-6456</strong></b></p>		
		</div>
<!------------------------Nav Bar------------------------>
		<nav>
			<ul>
				<div class="navBorder">
					<li><a href="../index.php">Home</a></li>
					<li><a href="../aboutUs.php" class="niceNav">About Us</a></li>
					<li><a href="../services.php" class="niceNav">Services</a></li>
					<li><a href="../estimateCalc.php" class="niceNav">Estimator</a></li>
					<li class="active"><a href="../contactUs.php" class="niceNav">Contact Us</a></li>
				</div>
			</ul>
			
			<div class="clearfix"></div>
		</nav>
<!------------------------Banner------------------------>
		<div class="banner">
			<a href="../index.php"><img src="../img/driveway1final.png" alt="make a banner" title="LT Terrassement Banner"/></a>
		</div>
<!------------------------Slogan------------------------>
		<div class="slogan">
			<center><img src="../img/oneStandard.png" alt="One Standard, Perfection"/></center>
		</div>
<!------------------------Contact Us Form------------------------>
		<div class="emailUs">
			<?php
			// define variables and set to empty values
			$nameErr = $emailErr = $phoneErr = "";
			$name = $email = $comment = $phone = "";
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			  if (empty($_POST["name"])) {
			    $nameErr = "Name is required";
			  } else {
			    $name = test_input($_POST["name"]);
			    // check if name only contains letters and whitespace
			    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			      $nameErr = "Only letters and white space allowed";
			    }
			  }
			  
			  if (empty($_POST["email"])) {
			    $emailErr = "Email is required";
			  } else {
			    $email = test_input($_POST["email"]);
			    // check if e-mail address is well-formed
			    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			      $emailErr = "Invalid email format";
			    }
			  }
			    
			  if (empty($_POST["phone"])) {
			    $phone = "";
			  } else {
			    $phone = test_input($_POST["phone"]);
			    // check if phone number syntax is valid (this regular expression also allows dashes in the URL)
			    if (!preg_match("/^\+?[0-9+()-]{7,20}$/",$phone)) {
			      $phoneErr = "Please enter valid phone number";
			    }
			  }
			  
			  if (empty($_POST["comment"])) {
			    $comment = "";
			  } else {
			    $comment = test_input($_POST["comment"]);
			  }
			}
			
			function test_input($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
			}
			?>
			
			<h2>PHP Form Validation Example</h2>
			<p><span class="error">* required field.</span></p>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
			  <input type="text" name="name" placeholder="Name" value="<?php echo $name;?>">
			  <span class="error">* <?php echo $nameErr;?></span>
			  <br><br>
			  <input type="email" name="email" placeholder="E-Mail" value="<?php echo $email;?>">
			  <span class="error">* <?php echo $emailErr;?></span>
			  <br><br>
			  <input type="tel" name="phone" placeholder="Phone Number" value="<?php echo $phone;?>">
			  <span class="error"><?php echo $phoneErr;?></span>
			  <br><br>
			  <textarea name="comment" placeholder="Message" rows="5" cols="40"><?php echo $comment;?></textarea>
			  <br><br>
			  <input type="submit" name="submit" value="Submit">  
			</form>
			
			<?php
			echo "<h2>Your Input:</h2>";
			echo $name;
			echo "<br>";
			echo $email;
			echo "<br>";
			echo $phone;
			echo "<br>";
			echo $comment;
			?>
		</div>
<!------------------------Slogan------------------------>
		<div class="slogan">
			<center><img src="../img/oneStandard.png" alt="One Standard, Perfection"/></center>
		</div>
	</div>
<!------------------------Footer------------------------>
	<footer>
		<div class="section">
			<img src="../img/lt.jpg" alt="LT logo"/>
		</div>
		
		<div class="section">
			<p><strong><b>Connect with Us!</b></strong></p>
			<ul>
				<li><a href="https://www.facebook.com/LTTerrassement/"><img src="../img/facebook.png" alt="facebook logo"/></a></li>
				<li><a href="mailto:ltterrassement@yahoo.com"><img src="../img/email.png" alt="email logo"/></a></li>
				<li><a href="tel:+15148140020"><img src="../img/phone.png" alt="phone logo"/></a></li>
				<li><a href="https://www.instagram.com/lt_terrassement/"><img src="../img/instagram.png" alt="instagram logo"/></a></li>
			</ul>				
		</div>
		
		<div class="section">
			<div class="smallBorder">
				<p>(514)-814-0020<br>
				(438)-884-6456<br>
				Boulevard Rome<br>
				Brossard, Qc.<br>
				ltterrassement@yahoo.com</p>
			</div>
		</div>
	</footer>
	<p style="text-align: center; font-size: 13px; padding: 0px;">&#169;Copyright - LT Terrassement, 2016</p>
</body>
<script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>			  
<script src="../java/menu.js"></script>
</html>
		
		
		
		
		
		