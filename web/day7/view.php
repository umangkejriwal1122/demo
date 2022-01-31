<?php
require ("mysql.php");
$result = viewMyData();
$count = mysqli_num_rows($result);
echo "<h4>Total number of rows present - $count</h4>";
while($row = mysqli_fetch_array($result)){
    print_r($row);
    //print_r($row['name']);
    echo "<br><br>";
}
?>