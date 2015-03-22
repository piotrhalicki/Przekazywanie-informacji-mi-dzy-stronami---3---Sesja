
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
	Strona "odbiorca"
	</h3>
	
		<br>
	<hr>
		<br>	

		<?php 
		
		session_start();
		if (isset($_SESSION['licznik'])) {
			echo 'Licznik odświeżeń strony w trakcie Sesji: ', '<strong>' .$_SESSION['licznik'], '</strong>';
		}
		echo '<br>';
		if (isset($_SESSION['sesja'])) {
			echo '<strong>' .$_SESSION['sesja'], '</strong>';
		} else {
			echo '<strong>', "Sesja wygasła", '</strong>';
		}
		
		?>
		<br>
		<a href="index.php">Przejdź do strony głównej</a>
		
	</body>

</html>	