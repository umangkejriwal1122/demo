<title>Arrays in PHP</title>
<?php
// Numeric Array
$a1 = array("Umang","Rahul","Rohit","Anjali","Shweta");
print_r($a1);
echo "<br>";
echo "Length or count of Array is ".count($a1)."<br>";
for ($i=0; $i<count($a1); $i++){
    echo "<p>$a1[$i]</p>";
}
// for each loop
foreach($a1 as $i){
    echo "<p>$i</p>";
}

$a2[0] = "Umang";
$a2[1] = "Rahul";
$a2[2] = "Amit";
$a2[3] = "Shweta";
$a2[4] = "Rohit";
print_r($a2);
echo "<br>";
// copy items of one array to new array
$a3 = array_values($a2);
print_r($a3);
echo "<br>";
// remove element from arry
unset($a3[2]);
print_r($a3);
echo "<br>";
// add item to array
array_push($a2,"Bob","Adam");
print_r($a2);
echo "<br><br><br>";

/// Associative Array
$marks = array("Amit"=>90,"Umang"=>80,"Rahul"=>70,"Shweta"=>95,"Rohit"=>60);
print_r($marks);
echo "<br>";
echo $marks['Rahul'];
echo "<br>";
foreach($marks as $i){
    echo "<p>$i</p>";
}
/// Multi Dimentional Array
$marks = array("Amit"=>array("Maths"=>100,"Science"=>90,"English"=>80),
                "Umang"=>array("Maths"=>90,"Science"=>96,"English"=>85),
                "Rahul"=>array("Maths"=>80,"Science"=>88,"English"=>86),
                "Shweta"=>array("Maths"=>70,"Science"=>88,"English"=>70),
                "Rohit"=>array("Maths"=>60,"Science"=>77,"English"=>84));
print_r($marks);
echo "<br>";
print_r($marks['Umang']);
echo "<br>";
echo $marks['Umang']['Science'];
?>