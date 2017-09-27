<?php
session_start(); //session starten
if(isset($_POST['sendebutton'])){
     
    //beim absenden des formulars post daten in session varibalen schreiben
 
    $echo = $_SESSION['team'] = (string)$_POST['team'];
 
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
				
				<h1>SPIELPLAN</h1>
				<h2>WÄHLEN SIE BITTE DAS SPIEL AUS</h2>
				
				<form action="question2.php" method="post">
					
				<!--<?php
					if ($echo == "1bundesliga") {
						?><select name="team">
							<option value="bremen">Werder Bremen</option>
						</select><?php
					} elseif ($echo == "2bundesliga") {
						?><select name="team">
							<option value="dynamo">Dynamo Dresden</option>
						</select><?php
					} elseif ($echo == "3bundesliga") {
						?><select name="team">
							<option value="magdeburg">Magdeburg</option>
						</select><?php
					} elseif ($echo == "superleaque") {
						?><select name="team">
							<option value="fcsion">FC SION</option>
						</select><?php
					} elseif ($echo == "challengeleague") {
						?><select name="team">
							<option value="fcarau">FC Aarau</option>
						</select><?php
					} elseif ($echo == "laliga") {
						?><select name="team">
							<option value="malaga">Malaga</option>
						</select><?php
					} else {
						?><select name="premierleague">
							<option value="mancity">Manchester City</option>
						</select><?php
					}
				?>-->
				
				<?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "pitchinvaders";

					// Create connection
					$conn = mysqli_connect($servername, $username, $password, $dbname);
					// Check connection
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}

					$sql = "SELECT * FROM bremen";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
						// output data of each row
						while($row = mysqli_fetch_assoc($result)) {
							echo "id: " . $row["spielid"]. " - Name: " . $row["Datum"]. " " . $row["Ort"]. "<br>";
						}
					} else {
						echo "0 results";
					}

					mysqli_close($conn);
					?> 

				<br>
					<!--<input type="text" name="personen"></input> <br>-->
						
					<button type="submit">WEITER</button>
				</form>
				
				
					
				</div>
				
		</div>
	
	</div>
</body>

</html>