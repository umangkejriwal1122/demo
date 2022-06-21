<?php

$s = "We are learning PHP By Finland Labs";

echo "The length of the string is ".strlen($s)."<br>";
echo "Word Count :  ".str_word_count($s)."<br>";
echo strrev($s)."<br>";
echo strpos($s,"PHP")."<br>";
echo str_replace("PHP","PHP Programming",$s);
echo "<br>";
$t = "We are learning PHP By Finland Labstt";
echo chop($t,"tt");    // remove whitespace or character from right side
echo "<br>";
$u = "     We are learning PHP By Finland Labs    ";
echo trim($u);       // remove whitespace or character from both side
echo "<br>";
$v = "ttuWe are learning PHP By Finland Labsttu";
echo trim($v,"ttu");
echo "<br>";
echo ltrim($v,"ttu");
echo "<br>";
echo rtrim($v,"ttu");
?>