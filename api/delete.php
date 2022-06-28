<?php
include "config.php";
$id = $_GET['id'];
$query = "delete from destination where id = '$id'";
if(mysqli_query($con,$query)){
    echo "Destination Deleted";
}
else{
    echo "Problem in deleting destination";
}

?>