<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  function rekenUit(  $a,  $b, $c ){
$abc = $a + $b + $c;
return $abc;
}
echo "Als ik de getallen 6, 7 en 8 bij elkaar optel, is de uitkomst"." " .rekenUit(6,7,8);
echo "<br><br>";
echo "Als ik de getallen 14, 67 en 24 bij elkaar optel, is de uitkomst". " " .rekenUit(14,67,24);
echo "<br><br>";
echo "Als ik de getallen 12, 69 en 420 bij elkaar optel, is de uitkomst"." ".rekenUit(12,69,420);

?>
</body>
</html>