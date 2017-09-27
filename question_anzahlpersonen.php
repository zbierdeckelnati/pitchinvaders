<?php 
session_start();

include('include/mysql.php');

?>


<html>

<head>
	<?php include('include/header.php'); ?>
</head>

<body background="photos/stadium.jpg">
	<div id="wrapper">
	
		<div id="header">
		<?php include ('include/navi.php');?>
			<div id="user">
				<?php
				if(!isset($_SESSION['userid'])) {
				 die('Bitte zuerst <a href="login.php">einloggen</a>');
				}
				 
				//Abfrage der Nutzer ID vom Login
				$userid = $_SESSION['userid'];
				 
				echo "Hallo User: ".$userid;
				
				?> <br><br><a href="logout.php">Logout</a><?php
				?>
			</div>
		</div>
		
		<div id="navi">
		
		</div>
		
		<div id="body">
		
				<img src="photos/corteo.jpg" id="content">
				
				<div id="content">
				
				<h1>ANZAHL PERSONEN</h1>
				<h2>FÜR WIE VIELE PERSONEN MÖCHTEN SIE DIE REISE PLANEN?</h2>
				
				<form action="question_land.php" method="post">
					<input type="checkbox" name="personen" value="1"> 1</input> <br>
					<input type="checkbox" name="personen" value="2"> 2</input> <br>
					<input type="checkbox" name="personen" value="3"> 3</input> <br>
					<input type="checkbox" name="personen" value="4"> 4</input> <br>
					<input type="checkbox" name="personen" value="5"> 5</input> <br>
					<input type="checkbox" name="personen" value="6"> 6</input> <br>
					
					<!--<input type="text" name="personen"></input> <br>-->
					
					<button type="submit" name="sendebutton">WEITER</button>
				</form>
				
				
					
				</div>
				
		</div>
	
	</div>
</body>

</html>