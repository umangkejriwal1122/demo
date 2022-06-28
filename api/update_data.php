<?php
if(isset($_POST['submit'])){
    include "config.php";
    $city = $_POST['city'];
    $desc = $_POST['description'];
    $curr = $_POST['currency'];
    $price = $_POST['price'];
    $offer = $_POST['offer'];
    $id = $_POST['id'];
    $query = "update destination set city = '$city',description='$desc',currency='$curr',
    price='$price',offer='$offer' where id = '$id'";

    if(mysqli_query($con,$query)){
        echo "Destination Updated";
    }
    else{
        echo "Failed to Update Destination";
    }
}

?>