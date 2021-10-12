<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "mydata";
$con = mysqli_connect($host,$user,$pass,$db);

if($con){
    $query = "select * from users";
    $result = mysqli_query($con,$query);
    $count = mysqli_num_rows($result);
    while($row = mysqli_fetch_array($result)){
        echo $row['email']."<br>";
    }
}
else{
    echo "Connection Error";
}

?>