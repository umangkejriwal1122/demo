<?php
// Numeric Array
$a1 = array("Umang","Rahul","Amit","Shweta","Anjali");
print_r($a1);
echo "<br>";
echo "Length or Count of Array is ".count($a1)."<br>";
for ($i=0; $i<count($a1); $i++){
    echo $a1[$i];
    echo "<br>";
}
// for each loop
foreach($a1 as $i){
    echo $i."<br>";
}
$a2[0] = "Umang";
$a2[1] = "Rahul";
$a2[2] = "Amit";
$a2[3] = "Shweta";
$a2[4] = "Anjali";
print_r($a2);
echo "<br>";
$a3 = array_values($a2);   // add items to array
print_r($a3);
echo "<br>";
unset($a3[2]);   // to remove an element
print_r($a3);
echo "<br><br><br>";
// Associative Array
$marks = array("Umang" => 90,"Amit" => 80,"Rahul" => 70,"Shweta" => 95);
print_r($marks);
echo "<br>";
foreach($marks as $i){
    echo $i."<br>";
}
$a6 = array("Umang",10,"Amit",20.5,"Anjali");
print_r($a6);
echo "<br><br><br>";
// Multidimentional Array
$marks = array("Umang" => array("Maths"=>90,"Science"=>85,"Hindi"=>95),
                "Amit" =>  array("Maths"=>70,"Science"=>65,"Hindi"=>44),
                "Rahul" =>  array("Maths"=>30,"Science"=>55,"Hindi"=>59),
                "Shweta" =>  array("Maths"=>80,"Science"=>89,"Hindi"=>77));
print_r($marks);
echo "<br>";
print_r($marks['Amit']);
echo "<br>";
print_r($marks['Amit']['Science']);
?>