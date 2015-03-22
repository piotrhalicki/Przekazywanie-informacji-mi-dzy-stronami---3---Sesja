<?php
session_start();
if(!isset($_SESSION['licznik'])) {
	$_SESSION['licznik'] = 1;
}
else {
	$_SESSION['licznik']++;
}
if(!isset($_SESSION['sesja'])) {
	$_SESSION['sesja'] = "Sesja trwa :)";
}
?>

<!DOCTYPE html>

<html lang="pl-PL">
	<head>
		<meta charset="UTF-8">
		<meta name="Przekazywanie informacji" content="przekazywanie informacji, sesja">	
		<title>						
		Przekazywanie informacji między stronami - 3 - Sesja
		</title>
	</head>

	<body>

	<h1>
	<strong><em>Przekazywanie informacji między stronami</em></strong>
	</h1>
	
		<br>
	<hr>
		<br>
	
	<h2> 							
	<strong>03 - Sesja</strong>
	</h2>
		
		
		<br>
	<hr>
		<br>
	
	<h3> 
	Strona "nadawca"
	</h3>
	
		<br>
	<hr>
		<br>	
<?php
echo 'Licznik odświeżeń strony w trakcie Sesji: ', '<strong>' .$_SESSION['licznik'], '</strong>';
echo '<br>';
echo '<strong>' .$_SESSION['sesja'], '</strong>';
?>		
<br>
		<a href="odbiorca.php" target="_blank">Przejdź na stronę odbiorcę</a>
	</body>

</html>	