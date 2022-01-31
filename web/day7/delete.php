<?php
require("mysql.php");
if(isset($_REQUEST['submit'])){
    $email = $_REQUEST['email'];
    $password = $_REQUEST['pass'];
    if($email!="" && $password!=""){
        $result = delete($email,$password);
        if($result){
            header("Location:form_delete.php?status=done");
        }
        else{
            header("Location:form_delete.php?status=failed");
       }
    }
    else{
        header("Location:form_delete.php?status=empty");
    }
}
else{
    header("Location:form_delete.php?status=submit");
}
?>