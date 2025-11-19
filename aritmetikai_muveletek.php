<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aritmetikai műveletek</title>
</head>
<body>

<h4>26. Kérj be három számot és számítsd ki az összegüket!</h4>
<?php 
$a = 5;
$b = 7;
$c = 8;

echo $a . "+" . $b . "+" .$c . "=";
echo $a + $b + $c;

?>
<hr>

<h4>27. Számítsd ki három szám átlagát!</h4>
<?php 
$a = 5;
$b = 7;
$c = 8;

echo $a . "+" . $b . "+" .$c . "/3=";
echo number_format(($a + $b + $c)/3,2);
?>
<hr>

<h4>28. Emelj egy számot négyzetre!</h4>
<?php 
$a = 5;
echo $a*$a;
?>
<hr>

<h4>29. Emelj egy számot harmadik hatványra!</h4>
<?php 
$a = 5;
echo $a*$a*$a;
?>
<hr>

<h4>30. Számítsd ki egy szám négyzetgyökét!</h4>
<?php 
$a = 5;
echo number_format(sqrt($a),2);
?>
<hr>

<h4>31. Számítsd ki két szám maradékát!</h4>
<?php 
$a = 5;
$b = 7;

echo $b % $a;

?>
<hr>

<h4>32. Számítsd ki egy háromszög területét alap és magasság alapján!</h4>
<?php 
$a= 7;
$m = 8;

echo ($a * $m)/2;

?>
<hr>

<h4>33. Tárold két számot, majd számítsd ki a nagyobbikat!</h4>
<?php 
$a = 5;
$b = 7;

echo max($a,$b);
?>
<hr>

<h4>34. Tárold két számot, majd számítsd ki a kisebbiket!</h4>
<?php 
$a = 5;
$b = 7;

echo min($a,$b);

?>
<hr>

<h4>35. Véletlenszerűen generálj egy számot 1 és 100 között!</h4>
<?php 
echo rand(1,100);

?>
<hr>

<h4>36. Generálj két véletlen számot és add össze!</h4>
<?php 
$a = rand(1,100);
$b = rand(1,100);
echo $a . "+" . $b . "=";
echo $a + $b;
?>
<hr>

<h4>37. Számítsd ki egy számsorozat (1–n) összegét!</h4>
<?php ?>
<hr>

<h4>38. Számítsd ki, hogy egy szám páros vagy páratlan!</h4>
<?php 
$a = 5;

echo $a%2==0
? "Páros"
: "Páratlan";
?>
<hr>

<h4>39. Számítsd ki, hogy egy szám osztható-e 3-mal!</h4>
<?php 

$a = 1248;
$osszeg = array_sum(str_split($a));
echo $osszeg%3 == 0
? "Osztható 3-mal"
: "Nem osztható 3-mal";
?>
<hr>

<h4>40. Számítsd ki, hogy egy szám pozitív vagy negatív!</h4>
<?php 
$a = -2;

echo $a>0 
? "Pozitív"
: "Negatív";
?>
<hr>

<h4>41. Számítsd ki az első 10 természetes szám összegét!</h4>
<?php 
$osszeg = 0;
for ($i=0; $i <11 ; $i++) { 
    $osszeg =$osszeg+ $i;
}
echo $osszeg;

?>
<hr>

<h4>42. Számítsd ki az első 10 természetes szám szorzatát!</h4>
<?php 
$osszeg = 1;
for ($i=1; $i < 11 ; $i++) { 
    $osszeg = $osszeg * $i;
}
echo $osszeg;
?>
<hr>

<h4>43. Számítsd ki a 100-ig terjedő páros számok összegét!</h4>
<?php 
$osszeg = 0;

for ($i=0; $i <101 ; $i++) { 
    if($i%2==0){
        $osszeg =$osszeg+ $i;
    } 
}
echo $osszeg;
?>
<hr>

<h4>44. Számítsd ki a 100-ig terjedő páratlan számok összegét!</h4>
<?php 
$osszeg = 0;

for ($i=0; $i <101 ; $i++) { 
    if($i%2==1){
        $osszeg =$osszeg+ $i;
    } 
}
echo $osszeg;
?>
<hr>

<h4>45. Számítsd ki a 7-es szorzótábla első 10 elemét!</h4>
<?php 
for ($i=1; $i < 11 ; $i++) { 
    echo $i."* 7 =". $i * 7 . "<br>"; 
}
?>
<hr>
</body>
</html>