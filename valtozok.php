<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Változók és alapműveletek </title>
</head>
<body>
    
<h4>1.Hozz létre egy változót a neveddel és írasd ki!</h4>
<?php
$nev = "Hanna";
echo $nev
?>

<hr>

<h4>2.Tárolj két számot változóban, add össze őket és jelenítsd meg az eredményt!</h4>
<?php
$x = 5;
$y = 7;
echo "x: 5; y: 7";
echo "<br>";
echo $x + $y;
?>

<hr>

<h4>3.	Számítsd ki két szám különbségét!</h4>
<?php
$x = 5;
$y = 7;
echo "x: 5; y: 7";
echo "<br>";
echo $x - $y;

?>

<hr>

<h4>4.	Szorozz össze két változóban tárolt számot!</h4>
<?php
$x = 5;
$y = 7;
echo "x: 5; y: 7";
echo "<br>";
echo $x * $y;
?>

<hr>

<h4>5.	Oszd el két változóban tárolt számot és írasd ki az eredményt!</h4>
<?php
$x = 5;
$y = 7;
echo "x: 5; y: 7";
echo "<br>";
echo $x / $y;

?>

<hr>

<h4>6.	Számítsd ki két szám átlagát!</h4>
<?php
$x = 5;
$y = 7;
echo "x: 5; y: 7";
echo "<br>";
echo ($x + $y)/2;


?>

<hr>

<h4>7.	Tárolj egy szöveget és írd ki a hosszát!</h4>
<?php
$szoveg = "Eltárolok egy szöveget!";
echo $szoveg;
echo "<br>";
echo strlen($szoveg);

?>

<hr>

<h4>8.	Alakíts át egy számot stringgé!</h4>
<?php

$szam = 5;
echo $szam;
echo "<br>";
echo strval($szam);


?>

<hr>

<h4>9.	Alakíts át egy stringet számmá!</h4>
<?php
$string = "Hello";
echo $string;
echo "<br>";
echo intval($string);

?>

<hr>

<h4>10.	Írasd ki egy string első karakterét!</h4>
<?php
$szoveg = "Hello";
echo $szoveg;
echo "<br>";
echo $szoveg[0];
?>

<hr>

<h4>11.	Adj hozzá egy számhoz 5-öt, majd írasd ki az új értéket!</h4>
<?php
$x = 20;
echo $x;
echo "<br>";
echo $x +5;
?>

<hr>

<h4>12.	Csökkents egy változót 1-gyel!</h4>
<?php
$x = 20;
echo $x;
echo "<br>";
echo $x - 1;
?>

<hr>

<h4>13.	Számítsd ki egy kör kerületét sugár alapján!</h4>
<?php
$r = 5;
echo $r;
echo "<br>";
$kerulet = 2 * $r * pi();
echo $kerulet;
?>

<hr>

<h4>14.	Számítsd ki egy kör területét!</h4>
<?php
$r = 5;
echo $r;
echo "<br>";
$terulet = pi() * $r * $r;
echo $terulet;
?>

<hr>

<h4>15.	Tárolj el két sztringet és fűzd össze őket!</h4>
<?php
$str1 = "Hello";
$str2 = "World";

echo $str1 . $str2;
?>

<hr>

<h4>16.	Fűzd össze egy szó elé és mögé egy másik szót (például: "Hello" + "Világ")!</h4>
<?php
$str1 = "Hello";
$str2 = "World";

echo $str1 . $str2;
?>

<hr>

<h4>17.	Tárold egy henger magasságát és sugarát, számítsd ki a térfogatát!</h4>
<?php

$m = 5;
$r = 7;
$terfogat = $r * $r * pi() * $m;
echo $terfogat;
?>

<hr>

<h4>18.	Számítsd ki egy téglatest térfogatát!</h4>
<?php
$a = 5;
$b = 7;
$c = 8;
echo $a *$b*$c;
?>

<hr>

<h4>19.	Tárolj egy hőmérsékletet Celsiusban és alakítsd Fahrenheitre!</h4>
<?php

$C = 28;
echo $C*9/5+32;


?>

<hr>

<h4>20.	Tárolj egy életkort és ellenőrizd, 18 fölött van-e!</h4>
<?php
$kor = 16;

echo $kor >= 18 
? "Idősebb mint 18."
: "Fiatalabb mint 18";
?>

<hr>

<h4>21.	Tárolj egy mondatot és írasd ki csupa nagybetűvel!</h4>
<?php
$mondat = "Mondat csupa nagy betuvel";
echo strtoupper($mondat);
?>

<hr>

<h4>22.	Tárolj egy mondatot és írasd ki csupa kisbetűvel!</h4>
<?php
$mondat = "Mondat csupa kis betuvel";
echo strtolower($mondat);
?>

<hr>

<h4>23.	Cseréld ki egy stringben az „a” betűket „*”-ra!</h4>
<?php
$mondat = "Mondat csupa nagy betuvel";
echo str_replace('a', '*', $mondat);
?>

<hr>

<h4>24.	Vágj le egy stringből 5 karaktert!</h4>
<?php
$mondat = "Mondat csupa nagy betuvel";
echo substr($mondat, 0, -5);
?>

<hr>

<h4>25.	Ellenőrizd, hogy egy változó tartalmaz-e számot!</h4>
<?php
$valtozo = "Nem";
if (strpbrk($valtozo,"0123456789") !== false){
    echo "Van benne szam";
}
else echo "Nincs benne szám";

?>

<hr> 
</body>
</html>