<?php
if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $mobile = $_REQUEST['mobile'];
    $password = $_REQUEST['pass'];
    echo $name." ".$email." ".$mobile." ".$password."<br>";
    if($name!="" && $email!="" && $mobile!="" && $password!=""){
        header("Location:forms.php?status=done");
    }
    else{
        header("Location:forms.php?status=failed");
    }
}
else{
    header("Location:forms.php?status=failed");
}

?>