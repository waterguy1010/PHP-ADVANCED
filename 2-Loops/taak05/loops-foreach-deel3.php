<html>

<?php 
$student = array("voornaam" =>"mohammed", "achternaam"=> "de boer", "klas"=> "3b", "Leeftijd"=> 23, "Woonplaats"=> "groningen");
foreach ($student as $key => $value) {
    echo  $key. " : " .$value ;
    echo "<br>";
}
?>
</body>
</html>