<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tömbök</title>
</head>
<body>

<h4>46. Hozz létre egy tömböt 5 tetszőleges számmal és írasd ki!</h4>
<?php 
$tomb = array(1,2,3,4,5);
echo implode(', ',$tomb );

?>
<hr>

<h4>47. Írasd ki egy tömb első elemét!</h4>
<?php 
$tomb = array(1,2,3,4,5);
echo $tomb[0];
?>
<hr>

<h4>48. Írasd ki egy tömb utolsó elemét!</h4>
<?php 
$tomb = array(1,2,3,4,5);
echo end($tomb);
?>
<hr>

<h4>49. Add össze egy tömb összes elemét!</h4>
<?php 
$tomb = array(1,2,3,4,5);
echo array_sum($tomb);
?>
<hr>

<h4>50. Számítsd ki egy tömb átlagát!</h4>
<?php 
$tomb = array(1,2,3,4,5);
echo array_sum($tomb)/count($tomb);
?>
<hr>

<h4>51. Keress egy minimális értéket egy tömbben!</h4>
<?php 
$tomb = array(1,2,3,4,5);
echo min($tomb);
?>
<hr>

<h4>52. Keress maximális értéket egy tömbben!</h4>
<?php 
$tomb = array(1,2,3,4,5);
echo max($tomb);
?>
<hr>

<h4>53. Számold meg, hány elem van a tömbben!</h4>
<?php 
$tomb = array(1,2,3,4,5);
echo count($tomb);
?>
<hr>

<h4>54. Adj hozzá egy új elemet a tömb végéhez!</h4>
<?php 
$tomb = array(1,2,3,4,5);
array_push($tomb, 7);
echo implode(', ',$tomb );
?>
<hr>

<h4>55. Töröld a tömb utolsó elemét!</h4>
<?php 
$tomb = array(1,2,3,4,5);
array_pop($tomb);
echo implode(', ',$tomb );
?>
<hr>

<h4>56. Töröld a tömb első elemét!</h4>
<?php 
$tomb = array(1,2,3,4,5);
array_shift($tomb);
echo implode(', ',$tomb );
?>
<hr>

<h4>57. Adj hozzá egy elemet a tömb elejéhez!</h4>
<?php 
$tomb = array(1,2,3,4,5);
$tomb[0] = 0;
echo implode(', ',$tomb );
?>
<hr>

<h4>58. Ellenőrizd, hogy tartalmazza-e a tömb a megadott számot!</h4>
<?php 


?>
<hr>

<h4>59. Rendez egy tömböt növekvő sorrendbe!</h4>
<?php 
$tomb = array(2,1,3,4,5);
sort($tomb);
echo implode(', ',$tomb );
?>
<hr>

<h4>60. Rendez egy tömböt csökkenő sorrendbe!</h4>
<?php 
$tomb = array(2,1,3,4,5);
rsort($tomb);
echo implode(', ',$tomb );
?>
<hr>

<h4>61. Fordíts meg egy tömböt!</h4>
<?php 
$tomb = array(1,2,3,4,5);
echo implode(', ',array_reverse($tomb) );
?>
<hr>

<h4>62. Készíts tömböt nevek listájából, és írasd ki őket egyenként!</h4>
<?php 
$nevek = array("Hanna", "Henrik", "Milán", "Ákos");
echo implode(', ',$nevek);
?>
<hr>

<h4>63. Készíts tömböt három gyümölcs nevével!</h4>
<?php 
$gyumik = array("Banána", "Alma", "Körte");
echo implode(', ',$gyumik);
?>
<hr>

<h4>64. Készíts tömböt három szám négyzetével!</h4>
<?php 
$negyzetszamok = array(16, 25, 36);
echo implode(', ',$negyzetszamok);
?>
<hr>

<h4>65. Készíts tömböt 1-től 20-ig számokkal!</h4>
<?php 
$szamok = array();
for ($i=1; $i < 21; $i++) { 
    array_push($szamok,$i);
}
echo implode(', ',$szamok);

?>
<hr>

<h4>66. Szűrd ki egy tömbből a páros számokat!</h4>
<?php 
$szamok = array();
for ($i=1; $i < 21; $i++) { 
    array_push($szamok,$i);
}
echo implode(', ',$szamok);
echo "<br>";

$paros = array(); 
for ($i=1; $i < count($szamok) ; $i++) { 
    if($i % 2 == 0){
        array_push($paros,$i);
    }
}
echo implode(', ',$paros);

?>
<hr>

<h4>67. Szűrd ki egy tömbből a páratlan számokat!</h4>
<?php 
$szamok = array();
for ($i=1; $i < 21; $i++) { 
    array_push($szamok,$i);
}
echo implode(', ',$szamok);
echo "<br>";

$paratlan = array(); 
for ($i=1; $i < count($szamok) ; $i++) { 
    if($i % 2 == 1){
        array_push($paratlan,$i);
    }
}
echo implode(', ',$paratlan);
?>
<hr>

<h4>68. Keresd meg egy tömbben a 7-es szám indexét!</h4>
<?php 
$szamok = array(1,5,7,8,9,3,4);

for ($i=0; $i < count($szamok); $i++) { 
    if($szamok[$i] == 7){
        echo $i;
    }
}
?>
<hr>

<h4>69. Két tömb összefűzése egy harmadik tömbbé!</h4>
<?php 
$tomb1 = array(1,2,3,4,5);
$tomb2 = array(6,7,8,9,10);
$tomb3 = array_merge($tomb1,$tomb2);

echo implode(', ', $tomb3);
?>
<hr>

<h4>70. Távolíts el egy adott értéket a tömbből!</h4>
<?php 
$szamok = array(1, 5, 7, 8, 9);
$index = array_search(7, $szamok);
if ($index !== false) {
    unset($szamok[$index]);
}
echo implode(',',$szamok);

?>
<hr>    
</body>
</html>