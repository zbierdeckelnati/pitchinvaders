<?php
session_start(); //session starten
if(isset($_POST['sendebutton'])){
     
    //beim absenden des formulars post daten in session varibalen schreiben
 
    $echo = $_SESSION['land'] = (string)$_POST['land'];
 
	echo $echo;
}  

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
				
				<h1>LIGA</h1>
				<h2>WÄHLEN SIE BITTE DIE LIGA AUS</h2>
				
				<form action="question_team.php" method="post">
					
				<?php
					if ($echo == "de") {
						?><select name="liga">
							<option value="1bundesliga">1. Bundesliga</option>
							<option value="2bundesliga">2. Bundesliga</option>
							<option value="3bundesliga">3. Bundesliga</option>
						</select><?php
					} elseif ($echo == "ch") {
						?><select name="liga">
							<option value="superleaque">Super League</option>
							<option value="challengeleague">Challenge League</option>
						</select><?php
					} elseif ($echo == "es") {
						?><select name="liga">
							<option value="laliga">La Liga</option>
						</select><?php
					} else {
						?><select name="liga">
							<option value="premierleague">Premier League</option>
						</select><?php
					}
				?>

				<br>
					<!--<input type="text" name="personen"></input> <br>-->
						
					<button type="submit" name="sendebutton" >WEITER</button>
				</form>
				
				
					
				</div>
				
		</div>
	
	</div>
</body>

</html>