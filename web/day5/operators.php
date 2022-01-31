<?php
echo "<h3>Arithmetic / Mathematical Operators</h3>";
$a = 20;
$b = 10;
echo $a + $b.'<br>';
echo $a - $b.'<br>';
echo $a * $b.'<br>';
echo $a / $b.'<br>';
echo $a % $b.'<br>';
echo $a++.'<br>';
echo $a.'<br>';
echo $a--.'<br>';
echo $a.'<br>';

echo "<h3>Comparision Operators</h3>";
if($a==$b) {echo "A is equal to B<br>";}
if($a>=$b) {echo "A is greater than or equal to B<br>";}
if($a<=$b) {echo "A is less than or equal to B<br>";}
if($a>$b) {echo "A is greater than to B<br>";}
if($a<$b) {echo "A is less than to B<br>";}

echo "<h3>Logical Operators</h3>";
$c = 20;
$d = 0;
if($c and $d) {echo "Both are true(non zero)<br>";}
if($c or $d) {echo "Either one or both are true<br>";}
if($c && $d) {echo "Both are true(non zero)<br>";}
if($c || $d) {echo "Either one or both are true<br>";}
if($c) {echo "C is true<br>";}
if($d) {echo "D is true<br>";}
if(!$c) {echo "C is not true<br>";}
if(!$d) {echo "D is not true<br>";}

echo "<h3>Assignment Operators</h3>";
$e = 20;
$f = 30;
$g = $e + $f;
echo $g."<br>";
$g += 10;
echo $g."<br>";
$g -= 10;
echo $g."<br>";
$g *= 10;
echo $g."<br>";
$g /= 10;
echo $g."<br>";
$g %= 10;
echo $g."<br>";

echo "<h3>Conditional Operators</h3>";
$x = 500;
$y = 2000;
$z = ($x>$y)?"X is greater than Y":"X is less than or equal to Y";
echo $z;
?>