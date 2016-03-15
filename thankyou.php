<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hipstirred - Coffee Curators - Thank You for Being So Hip</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<div class="wrapper">
		<header>
			<a href="index.html"><img src="images/hipstirred-logo@2x.png" height="36" width="105" alt="Hipstirred"></a>
			<nav>
				<ul>
					<li><a href="about.html">about us</a></li>
				</ul>
			</nav>
		</header>
		<main role="main">
			<h1>Thank you! <br> You've Been Hipstirred</h1>
			
			<div class="form-data">
				<h2>Here is the contact information you provided:</h2>
				<p>Name: <br><strong><?php echo $_SESSION['nameField']?></strong></p>
				<p>Email: <br><strong><?php echo $_SESSION['emailField']?></strong></p>
			</div>
			<h3>Pork Belly Letterpress Intelligentsia</h3> 
			
			<p>Direct trade dreamcatcher tofu, VHS retro migas fashion axe trust fund meh food truck cronut Truffaut YOLO pork belly fixie. Four dollar toast asymmetrical you probably haven't heard of them bitters. Bespoke chambray readymade, raw denim heirloom Godard stumptown keffiyeh Truffaut Tumblr deep v vinyl pug tousled tofu.</p>
		</main>
	</div>
	<footer>
		<div class="wrapper">
			<div class="social">
				<img src="images/twitter@2x.png" height="36" width="36" alt="twitter">
				<img src="images/instagram@2x.png" height="36" width="36" alt="instagram">
				<img src="images/facebook@2x.png" height="36" width="36" alt="facebook">
				<img src="images/pinterest@2x.png" height="36" width="36" alt="pinterest">
			</div>
			<p>© hipstirred LLC</p>
		</div>
	</footer>
</body>
</html>