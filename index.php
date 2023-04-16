<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Calculator PHP</title>
  <link rel="stylesheet" href="calc2.css" type="text/css">
</head>
<body>

<h1>Calculator PHP</h1>

<form method="post">
		<label for="numar1">Număr 1:</label>
		<input type="number" name="numar1" id="numar1" value="<?php echo $numar1; ?>">
		<br>
		<label for="numar2">Număr 2:</label>
		<input type="number" name="numar2" id="numar2" value="<?php echo $numar2; ?>">
		<br>
		<label for="numar3">Număr 3:</label>
		<input type="number" name="numar3" id="numar3" value="<?php echo $numar3; ?>">
		<br>
		<label for="numar4">Număr 4:</label>
		<input type="number" name="numar4" id="numar4" value="<?php echo $numar4; ?>">
		<br>
		<input type="submit" value="Adunare" name="op" />
		<input type="submit" value="Scadere" name="op" />
		<input type="submit" value="Inmultire" name="op" />
		<input type="submit" value="Impartire" name="op" />
		<input type="submit" value="Rest" name="op" />
	</form>

	<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$numar1 = $_POST['numar1'];
			$numar2 = $_POST['numar2'];
			$numar3 = $_POST['numar3'];
			$numar4 = $_POST['numar4'];
			
			$op = $_POST['op'];

			switch ($op) {
				case 'Adunare':
					$result = $numar1 + $numar2;
					echo "<p>Adunare: " . $result . "</p>";
					break;
				case 'Scadere':
					$result = $numar4 - $numar3;
					echo "<p>Scadere: " . $result . "</p>";
					break;
				case 'Inmultire':
					$result = $numar4 * $numar2;
					echo "<p>Inmultire: " . $result . "</p>";
					break;
				case 'Impartire':
					$result = $numar4 / $numar3;
					echo "<p>Împarțire: " . $result . "</p>";
					break;
				case 'Rest':
					$result = $numar4 % $numar3;
					echo "<p>Rest: " . $result . "</p>";
					break;
				default:
					echo "<p>Alege o operație pentru a efectua calculele.</p>";
			}
		}
	?>

  <footer>
    <p>Developed By <span class="name">Ecaterina Ștefan</span> | &copy;<?php echo date("Y"); ?> All Rights Reserved <span class="name">"PHP Academy"</span></p>
  </footer>




</body>
</html>