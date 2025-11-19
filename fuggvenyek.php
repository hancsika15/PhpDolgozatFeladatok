<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Függvények</title>
</head>
<body>
<h4>71. Készíts függvényt, ami kiír egy szöveget!</h4>
<?php

function Kiír(){
    echo "Hello World";
}

$Info = Kiír();

?>
<hr>

<h4>72. Készíts függvényt, amely visszaadja két szám összegét!</h4>
<?php

function Osszead($a,$b){
    return  $a + $b;
}

$Info = Osszead(5,7);
echo $Info;
?>
<hr>

<h4>73. Készíts függvényt, amely visszaadja két szám különbségét!</h4>
<?php

function Kivonas($a,$b){
    return  $a - $b;
}

$Info = Kivonas(5,7);
echo $Info;
?>
<hr>

<h4>74. Készíts függvényt, amely visszaadja két szám szorzatát!</h4>
<?php
function Szorzat($a,$b){
    return  $a * $b;
}

$Info = Szorzat(5,7);
echo $Info;
?>
<hr>

<h4>75. Készíts függvényt, amely visszaadja két szám hányadosát!</h4>
<?php
function Osztas($a,$b){
    return  number_format($a / $b,2);
}

$Info = Osztas(5,7);
echo $Info;
?>
<hr>

<h4>76. Írj függvényt, ami visszaadja egy szám négyzetét!</h4>
<?php
function Negyzet($szam){
    return $szam * $szam;
}

$Info = Negyzet(5);
echo $Info;
?>
<hr>

<h4>77. Írj függvényt, ami visszaadja egy szám harmadik hatványát!</h4>
<?php
function HarmadikHatvany($szam){
    return $szam * $szam * $szam;
}

$Info = HarmadikHatvany(5);
echo $Info;
?>
<hr>

<h4>78. Készíts függvényt, ami eldönti, páros-e egy szám!</h4>
<?php
function PvP($szam){
    if ($szam%2 ==0) return "Páros";
    else return "Páratlan";
}
$Info = PvP(6);
echo $Info;
?>
<hr>

<h4>79. Készíts függvényt, ami eldönti, pozitív-e egy szám!</h4>
<?php
function PvN($szam){
    if ($szam>0) return "Pozitív";
    else return "Negatív";
}
$Info = PvN(6);
echo $Info;

?>
<hr>

<h4>80. Készíts függvényt, ami eldönti, negatív-e egy szám!</h4>
<?php
$Info = PvN(-6);
echo $Info;
?>
<hr>

<h4>81. Írj függvényt, amely visszaadja egy sztring hosszát!</h4>
<?php

function Hossz($str){
    return strlen($str);
}
$Info = Hossz("Hello");
echo $Info;

?>
<hr>

<h4>82. Írj függvényt, amely nagybetűssé alakít egy szöveget!</h4>
<?php
function Nagybetus($str){
    return strtoupper($str);
}
$Info = Nagybetus("Hello");
echo $Info;
?>
<hr>

<h4>83. Írj függvényt, amely kisbetűssé alakít egy szöveget!</h4>
<?php
function Kisbetus($str){
    return strtolower($str);
}
$Info = Kisbetus("Hello");
echo $Info;
?>
<hr>

<h4>84. Írj függvényt, amely visszaadja egy szöveg első karakterét!</h4>
<?php
function Elso($str){
    return $str[0];
}
$Info = Elso("Hello");
echo $Info;
?>
<hr>

<h4>85. Írj függvényt, amely visszaad egy szöveg utolsó karakterét!</h4>
<?php
function Utolso($str){
    return $str[-1];
}
$Info = Utolso("Hello");
echo $Info;
?>
<hr>

<h4>86. Írj függvényt, amely megfordít egy sztringet!</h4>
<?php
function Forditva($str){
    return strrev($str);
}
$Info = Forditva("Hello");
echo $Info;
?>
<hr>

<h4>87. Írj függvényt, amely megszámolja, hány magánhangzó van egy szövegben!</h4>
<?php
function Maganhangzo($str){
    $s = "hello";

    // Ellenőrizzük, hogy van-e benne magánhangzó
    if (preg_match('/[aeiouáéíóöőúüű]/i', $s)) {
        return "Van magánhangzó a stringben!";
    } else {
        return "Nincs magánhangzó a stringben!";
    }
}
$Info = Maganhangzo("Hello");
echo $Info;
?>
<hr>

<h4>88. Írj függvényt, amely két szöveget összefűz!</h4>
<?php

function Osszefuz($a,$b){
    return  $a . $b;
}

$Info = Osszefuz("Hello","World");
echo $Info;
?>
<hr>

<h4>89. Írj függvényt, amely kiszámítja egy téglalap területét!</h4>
<?php
function TeruletTeglalap($a,$b){
    return $a* $b . " cm<sup>2</sup>";
}
$Info = TeruletTeglalap(5,6);
echo $Info;
?>
<hr>

<h4>90. Írj függvényt, amely visszaadja egy kör területét!</h4>
<?php
function TeruletKor($r){
    return number_format($r*$r*pi(),2) . " cm<sup>2</sup>";
}
$Info = TeruletKor(5);
echo $Info;
?>
<hr>

<h4>91. Írj függvényt, amely visszaadja egy kör kerületét!</h4>
<?php
function KeruletKor($r){
    return number_format(2*$r*pi(),2) . " cm<sup>2</sup>";
}
$Info = KeruletKor(5);
echo $Info;
?>
<hr>

<h4>92. Készíts függvényt, amely egy tömb összegét számolja ki!</h4>
<?php
function TombOsszege($tomb){
    return array_sum($tomb);
}

$tomb = array(1,2,3,4,5);
$Info = TombOsszege($tomb);
echo $Info;
?>
<hr>

<h4>93. Írj függvényt, ami megkeresi a minimumot egy tömbben!</h4>
<?php
function TombMin($tomb){
    return min($tomb);
}

$tomb = array(1,2,3,4,5);
$Info = TombMin($tomb);
echo $Info;
?>
<hr>

<h4>94. Írj függvényt, ami megkeresi a maximumot egy tömbben!</h4>
<?php
function TombMax($tomb){
    return max($tomb);
}

$tomb = array(1,2,3,4,5);
$Info = TombMax($tomb);
echo $Info;
?>
<hr>

<h4>95. Készíts függvényt, amely átlagot számol egy tömbből!</h4>
<?php
function TombAtlag($tomb){
    return array_sum($tomb)/count($tomb);
}

$tomb = array(1,2,3,4,5);
$Info = TombAtlag($tomb);
echo $Info;
?>
<hr>

<h4>96. Írj függvényt, amely megszámolja, hány páros szám van egy tömbben!</h4>
<?php
function Paros($tomb){
    $megjelenes = 0;

    for ($i=1; $i < count($tomb) ; $i++) { 
        if ($tomb[$i] % 2 == 0)  $megjelenes++;
       
    };
    return $megjelenes;
}

$tomb = array(1,2,3,4,5);
$Info = Paros($tomb);
echo $Info;

?>
<hr>

<h4>97. Írj függvényt, amely megszámolja, hány páratlan szám van egy tömbben!</h4>
<?php
function Paratlan($tomb){
    $megjelenes = 0;

    for ($i=0; $i < count($tomb) ; $i++) { 
        if ($tomb[$i] % 2 == 1)  /*echo $i ;*/ $megjelenes++;
       
    };
    return $megjelenes;
}

$tomb = array(1,2,3,4,5);
$Info = Paratlan($tomb);
echo $Info;
?>
<hr>

<h4>98. Írj függvényt, amely visszaadja egy tömb legnagyobb páros számát!</h4>
<?php
function ParosMax($tomb){

    $max = array();
    for ($i=1; $i < count($tomb) ; $i++) { 
        if ($tomb[$i] % 2 == 0) array_push($max, $tomb[$i]);
    };
    return max($max);
}

$tomb = array(1,2,3,4,5,6);
$Info = ParosMax($tomb);
echo $Info;
?>
<hr>

<h4>99. Írj függvényt, amely eldönti, tartalmaz-e egy tömb egy adott értéket!</h4>
<?php

function Ertek($tomb){
    return in_array(45,$tomb) ? "Igen" : "Nem";
}

$tomb = array(1,2,5,3,82,6,9,544,55,4);
$Info = Ertek($tomb);
echo $Info;
?>
<hr>

<h4>100. Írj függvényt, amely két tömböt összefűz egy harmadikba!</h4>
<?php

function Merge($tomb1, $tomb2){
    $tomb3 = array_merge($tomb1,$tomb2);
    return $tomb3;
}

$tomb1 = array(1,2,3,4,5);
$tomb2 = array(6,7,8,9,10);
$Info = Merge($tomb1, $tomb2);
echo implode(", ", $Info); 

?>
<hr>

</body>
</html>