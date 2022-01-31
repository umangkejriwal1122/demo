<?php
require("mysql.php");
if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $mobile = $_REQUEST['mobile'];
    $password = $_REQUEST['pass'];
    if($name!="" && $email!="" && $mobile!="" && $password!=""){
        $result = insert($name,$email,$mobile,$password);
        if($result){
            header("Location:forms.php?status=done");
        }
        else{
            header("Location:forms.php?status=failed");
       }
    }
    else{
        header("Location:forms.php?status=empty");
    }
}
else{
    header("Location:forms.php?status=submit");
}
?>