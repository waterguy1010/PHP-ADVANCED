<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="advanced-1.php" action="advanced-2.php" method="post">
        <select name="tekst-kleuren">
            <?php
                $kleuren = array("black", "blue", "green", "red", "brown");
                foreach ($kleuren as $kleur){
                    echo "<option value='$kleur'> $kleur </option>";
                };
            ?>
        </select>
        <select name="achtergrond-kleuren">
            <?php
                $kleuren = array("red", "blue", "green", "black", "brown");
                foreach ($kleuren as $kleur){
                    echo "<option value='$kleur'> $kleur </option>";
                };
            ?>
        </select>
        <input type="text" id="tabel-bord" name="tbname">
        <input type="submit"> 
        
    </form>
</body>
</html>