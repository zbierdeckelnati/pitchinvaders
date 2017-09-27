<?php
session_start(); //session starten
if(isset($_POST['sendebutton'])){
     
    //beim absenden des formulars post daten in session varibalen schreiben
 
    $echo = $_SESSION['anzahlpersonen'] = (string)$_POST['personen'];
 
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
				
				<h1>LAND</h1>
				<h2>WELCHES LAND MÖCHTEN SIE BESUCHEN?</h2>
				
				<form action="question_liga.php" method="post">
					<select name="land">
						<option value="de">Deutschland</option>
						<option value="ch">Schweiz</option>
						<option value="es">Spanien</option>
						<option value="gb">England</option>
					</select><br>
					
					<!--<input type="text" name="personen"></input> <br>-->
					
					<button type="submit" name="sendebutton" >WEITER</button>
				</form>
				
				
					
				</div>
				
		</div>
	
	</div>
</body>

</html>