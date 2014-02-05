<!DOCTYPE html>
<html>

<head>
	<title>...</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<!-- Hier kann PHP geübt werden -->
	<?php  
		// 1.) Variable
		$a = 4;
		$b = "Loose typing bei PHP, d.h. Variablen ohne Datentyp";
		$c = 1.75;
		$d = true;

		echo "1. Variable: $a<br>";
		echo "2. Variable: $b<br>";
		echo "3. Variable: $c<br>";
		echo "4. Variable: $d<br>";

		// 2.) if
		if ($a > $c) {
			echo "a = $a ist groesser als c = $c<br>";
		}

		// 3.) Array
		$e = array(33,22,55);
		$count = count($e);
		echo "Anzahl Array-Elemente: $count";
		for ($i=0; $i<$count; $i++) {
			echo "<br>Array-Element: $e[$i]";
		}
	?>
	
	<p>************************************************</p>
	<p><strong>Interessante Quellen zu PHP:</strong></p>
	<ul>
		<li><a href="http://www.php.net/manual/de/langref.php" target="_blank">http://www.php.net/manual/de/langref.php</a>
		<li><a href="http://net.tutsplus.com/tutorials/php/learn-php-from-scratch-a-training-regimen/" target="_blank">http://net.tutsplus.com/tutorials/php/learn-php-from-scratch-a-training-regimen/</a>
		<li><a href="http://us2.php.net/tut.php" target="_blank">http://us2.php.net/tut.php</a>
		<li><a href="http://www.w3schools.com/PHP/Default.asp" target="_blank">http://www.w3schools.com/PHP/Default.asp/</a>
	</ul>
	<script>

	</script>
</body>

</html>