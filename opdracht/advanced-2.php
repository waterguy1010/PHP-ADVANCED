<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{
    color:<?php echo $_POST['tekst-kleuren']?>;
    background-color: <?php echo $_POST ['achtergrond-kleuren']?>;
}
table, th, td {
  border: <?php echo $_POST ['tbname'] ?>px solid black;

}
</style>
<body>

    

<table>
  <tr>
    <?php
     $info = array("abdel", "souhali", "kanye", "amsterdam", "voetbal");
     foreach ($info as $alff){
      echo "<th>$alff</th>";
  };
    ?>
  </tr>
</table>
</body>
</html>



