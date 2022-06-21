<?php
echo "<h3>Arithemtic/Mathematical Operators</h3>";
$a = 10;
$b = 5;
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
if($a==$b){echo "They are equal<br>";}
if($a>=$b){echo "A is greater than or equal to B<br>";}
if($a<=$b){echo "A is less than or equal to B<br>";}
if($a!=$b){echo "They are not equal<br>";}
if($a<$b){echo "A is less than B<br>";}
if($a>$b){echo "A is greater than B<br>";}

echo "<h3>Logical Operators</h3>";
$c = 20;
$d = 0;
if($c and $d){echo "Both are true(Non-Zero)<br>"; }
if($c or $d){echo "Either one or both are true<br>"; }
if($c && $d){echo "Both are true(Non-Zero)<br>"; }
if($c || $d){echo "Either one or both are true<br>"; }
if($c){echo "C is true<br>"; }
if($d){echo "D is true<br>"; }
if(!$c){echo "C is not true<br>"; }
if(!$d){echo "D is not true<br>"; }

echo "<h3>Assignment Operators</h3>";
$e = 10;
$f = 5;
$g = $e + $f;
echo $g."<br>";
$g += 10;    // $g = $g + 10
echo $g."<br>";
$g -= 10;    // $g = $g - 10
echo $g."<br>";
$g /= 10;    // $g = $g / 10
echo $g."<br>";
$g *= 10;    // $g = $g * 10
echo $g."<br>";
$g %= 10;    // $g = $g % 10
echo $g."<br>";

echo "<h3>Conditional Operators</h3>";
$x = 5000;
$y = 2000;
$z = ($x > $y)? "X is greater than Y" : "X is less than or equal to Y";
echo $z;

?>