<?php
$i = 0;
while($i<10){
    echo 'The value of $i is '.$i.'<br>';
    $i++;
}
echo "<br><br>";
$i = 0;
while($i<10){
    $i++;
    echo 'The value of $i is '.$i.'<br>';
}
echo "<br><br>";
$i = 0;
do{
    echo 'The value of $i is '.$i.'<br>';
    $i++;
}
while($i<10);
echo "<br><br>";
for($i=0;$i<10;$i++){
    echo 'The value of $i is '.$i.'<br>';
}
?>