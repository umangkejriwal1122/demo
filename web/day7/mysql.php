<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "mydata";
// make a connection
$con = mysqli_connect($host,$user,$pass,$db);
/*
if($con){
    echo "Connection Success";
}
else{
    echo "Connection Failed";
}
*/
function insert($name,$email,$mob,$pass){
    global $con;
    $query = "insert into user(name,email,mobile,password)
            values('$name','$email','$mob','$pass')";
    $result = mysqli_query($con,$query);
    if($result){
        return true;
    }
    else{
        return false;
    }
}

function viewMyData(){
    global $con;
    $query = "select * from user";
    $result = mysqli_query($con,$query);
    return $result;
}

function delete($email,$pass){
    global $con;
    $query = "delete from user where email = '$email' and password = '$pass'";
    $result = mysqli_query($con,$query);
    if($result){
        return true;
    }
    else{
        return false;
    }
}

function update($name,$email,$mob,$pass){
    global $con;
    $query = "update user set name = '$name',password='$pass',mobile='$mob'
            where email = '$email'";
    $result = mysqli_query($con,$query);
    if($result){
        return true;
    }
    else{
        return false;
    }
}

?>

