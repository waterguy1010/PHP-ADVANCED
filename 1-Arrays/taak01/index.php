<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <?php
  $gegevens = array ("voornaam" => "Abdel", "Achternaam" => "Souhali", "Leeftijd" => "300", "klas" => "1C",);
  echo "Gegevens van abdel:";
  echo "<br>";
  echo "Voornaam : ". $gegevens["voornaam"];
  echo "<br>";
  echo "Achternaam : ". $gegevens["Achternaam"];
  echo "<br>";
  echo "Leeftijd : " . $gegevens["Leeftijd"]. " jaar " ;
  echo "<br>";
  echo "Klas : ", $gegevens["klas"];


    ?>
</body>
</html>