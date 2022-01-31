<?php
require("mysql.php");
if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $mobile = $_REQUEST['mobile'];
    $password = $_REQUEST['pass'];
    if($name!="" && $email!="" && $mobile!="" && $password!=""){
        $result = update($name,$email,$mobile,$password);
        if($result){
            header("Location:form_update.php?status=done");
        }
        else{
            header("Location:form_update.php?status=failed");
       }
    }
    else{
        header("Location:form_update.php?status=empty");
    }
}
else{
    header("Location:form_update.php?status=submit");
}
?>