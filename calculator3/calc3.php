<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="calc3.css" type="text/css">
  <meta charset="UTF-8">
  <title>Calculator 3</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@300;400;500;600;700&family=Source+Sans+Pro:wght@200;400;600;900&  display=swap" rel="stylesheet">
</head>
<body>

  <h1>Calculator PHP</h1>

  <div class="form-wrapper">
  <form method="post">
    <label for="numar1">Număr 1:</label>
    <input type="number" name="numar1" id="numar1" value="<?php echo $numar1;?>">
    <br>
    <label for="numar2">Număr 2:</label>
    <input type="number" name="numar2" id="numar2" value="<?php echo $numar2;?>">
    <br>
    <label for="numar3">Număr 3:</label>
    <input type="number" name="numar3" id="numar3" value="<?php echo $numar3;?>">
    <br>
    <label for="numar4">Număr 4:</label>
    <input type="number" name="numar4" id="numar4" value="<?php echo $numar4;?>">
    <br>
    <br>
    <div class="submit">
    <input type="submit" name="op" value="Adunare">
    <input type="submit" name="op" value="Scadere">
    <input type="submit" name="op" value="Inmultire">
    <input type="submit" name="op" value="Impartire">
    <input type="submit" name="op" value="Rest">
  </div>
  </form>
</div>

<div id="div-php">
<?php 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
     $numar1 = $_POST['numar1'];
     $numar2 = $_POST['numar2'];
     $numar3 = $_POST['numar3'];
     $numar4 = $_POST['numar4'];
     $op = $_POST['op'];
   
     switch ($op) {
          case 'Adunare': 
            $result = $numar1 + $numar2;
            echo "<p>Rezultat adunare: " . $result . "</p>";
            break;
          case 'Scadere': 
            $result = $numar4 - $numar3;
            echo "<p>Rezultat scădere: " . $result . "</p>";
            break;
          case 'Inmultire': 
            $result = $numar4 * $numar2;
            echo "<p>Rezultat înmulțire: " . $result . "</p>";
            break;
          case 'Impartire': 
            $result = $numar4 / $numar3;
            echo "<p>Rezultat împărțire: " . $result . "</p>";
            break;
          case 'Rest': 
            $result = $numar1 % $numar2;
            echo "<p>Rezultat rest: " . $result . "</p>";
            break;
            default:
            echo "<p>Alegeți o operație pentru calcul.</p>";
                }
              }
?>

<div class=footer-wrapper>
<footer>
    <p>Developed By <span class="name">Ecaterina Ștefan</span> | &copy;<?php echo date("Y"); ?> All Rights Reserved <span class="name">"PHP Academy"</span></p>
  </footer>
</div>
</div>
</body>


</html>