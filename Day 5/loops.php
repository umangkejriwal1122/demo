<?php
echo "<h3>While Loop</h3>";
$i = 0;
while($i<10){
    echo "The value of i is $i <br>";
    $i++;
}

echo "<h3>Do While Loop</h3>";
$i = 0;
do{
    echo "The value of i is $i <br>";
    $i++;
}
while($i<10);

echo "<h3>For Loop</h3>";
for($i=0;$i<10;$i++){
    echo "The value of i is $i <br>";
}

?>