<?php 
session_start();

include('include/mysql.php');

if(isset($_GET['login'])) {
 $email = $_POST['email'];
 $passwort = $_POST['passwort'];
 
 $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
 $result = $statement->execute(array('email' => $email));
 $user = $statement->fetch();
 
 //Überprüfung des Passworts
 if ($user !== false && password_verify($passwort, $user['passwort'])) {
 $_SESSION['userid'] = $user['id'];
 die(header('Location: question_anzahlpersonen.php'));
 } else {
 $errorMessage = "E-Mail oder Passwort war ungültig<br>";
 }
 
}
?>


<html>

<head>
	<?php include('include/header.php'); ?>
</head>

<body background="photos/stadium.jpg">
	<div id="wrapper">
	
		<div id="header">
			<?php include ('include/navi.php');?>
		</div>
	
		<div id="body">
		
				<img src="photos/pitchinvader.jpg" id="content">
				
				<div id="content">
				<?php 
					error_reporting(0);
					$id = $_SESSION["userid"];
				?>
				
				<?php echo $id; ?>
				
				<?php if($id < 1){ ?>
				<h1>LOGIN</h1>
					<form action="?login=1" method="POST">
						<input type="text" name="email" placeholder="Email"></input> <br>
						<input type="password" name="passwort" placeholder="Passwort"></input> <br>
						
						<label><input type="checkbox" name="angemeldet_bleiben" value="1"> Angemeldet bleiben</label><br>
						
						<button type="submit">LOGIN</button>
						<br> <br> oder <a href="register.php">hier</a> registieren
					</form>
				<?php } else {} ?>
				
				<?php if($id > 0){ ?>
				<?php header('Location: question_anzahlpersonen.php') ?>
				<?php } else {} ?>
					
				</div>
				
		</div>
	
	</div>
</body>

</html>