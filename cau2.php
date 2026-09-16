<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
   <?php
   echo"<h2> Bang cuu chuong </h2>";
   for($x= 1; $x<=10; $x++){
        echo"<h2> chuong $x </h2>";
        echo"<table>";
        for($j = 1; $j <=10; $j++)
        {
           echo " $x x $j =" . ($x * $j) ."<br>";
        }
        echo "<hr>";
   }
   ?>
</body>
</html>