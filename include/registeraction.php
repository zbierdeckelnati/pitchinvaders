<?php
$showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll
 
if(isset($_GET['register'])) {
 $error = false;
 $email = $_POST['email'];
 $passwort = $_POST['passwort'];
 $passwort2 = $_POST['passwort2'];
  
 if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 echo 'Bitte eine gültige E-Mail-Adresse eingeben<br>';
 $error = true;
 } 
 if(strlen($passwort) == 0) {
 echo 'Bitte ein Passwort angeben<br>';
 $error = true;
 }
 if($passwort != $passwort2) {
 echo 'Die Passwörter müssen übereinstimmen<br>';
 $error = true;
 }
 
 //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
 if(!$error) { 
 $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
 $result = $statement->execute(array('email' => $email));
 $user = $statement->fetch();
 
 if($user !== false) {
 echo 'Diese E-Mail-Adresse ist bereits vergeben<br>';
 $error = true;
 } 
 }
 
 //Keine Fehler, wir können den Nutzer registrieren
 if(!$error) { 
 $passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);
 
 $statement = $pdo->prepare("INSERT INTO users (email, passwort) VALUES (:email, :passwort)");
 $result = $statement->execute(array('email' => $email, 'passwort' => $passwort_hash));
 
 if($result) { 
 echo '<h1>Registrieren erfolgreich</h1>Sie werden in Kürze weitergeleitet.'; header ("Refresh: 2; questions.php");
;
 $showFormular = false;
 } else {
 echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
 }
 } 
}
 
if($showFormular) {
?>

	<h1>REGISTRIEREN</h1>
		<form action="?register=1" method="post">
			<input type="email" name="email" placeholder="Email"> <br> 
			<input type="password" name="passwort" placeholder="Passwort"> <br>
			<input type="password" name="passwort2" placeholder="Passwort wiederholen"> <br>
					 
			<button type="submit">REGISTRIEREN</button>
			<br> <br> oder <a href="index.php">hier</a> einloggen
		</form>
					 
<?php
} //Ende von if($showFormular)
?>
				