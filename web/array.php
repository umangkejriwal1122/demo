<title>Arrays in PHP</title>
<?php
// Numeric Array
$a1 = array("Umang","Rahul","Amit","Rohit","Karan");
echo "Length or Count of array is ".count($a1)."<br>";
for($i=0; $i<count($a1); $i++){
    echo $a1[$i];
    echo "<br>";
}
$a2[0] = "Umang";
$a2[1] = "Rahul";
$a2[2] = "Amit";
$a2[3] = "Rohit";
$a2[4] = "Karan";
$a2[3] = "Anjali";
$a2[6] = "Ruhi";
print_r($a2);
// for each loop
foreach($a2 as $a){
    echo "<p>".$a."</p>";
}
//unset($a2[2]);
print_r($a2);
print("<br>");
$a3 = array_values($a2);
print_r($a3);
print("<br><br><br>");
/// Associative Array
$marks = array("Umang" => 90,"Rahul" => 95, "Shalini" => 85, "Anjali" => 100);
print_r($marks);
echo "<br>".$marks["Rahul"];
print("<br><br><br>");
// Multi Dimensional Array
$mark = array("Umang"=>array("Maths"=>90,"Science"=>85,"English"=>95),
            "Rahul"=>array("Maths"=>95,"Science"=>95,"English"=>85),
            "Shalini"=>array("Maths"=>80,"Science"=>75,"English"=>55));
print_r($mark['Shalini']["Science"]);
print("<br><br><br>");
?>