<?php
if(isset($_REQUEST['submit'])){
    $name = $_REQUEST["name"];   //case sensitive
    $email = $_REQUEST["email"];   //case sensitive
    $mobile = $_REQUEST["mob"];   //case sensitive
    $password = $_REQUEST["pass"];   //case sensitive
    echo $name." ".$email." ".$mobile." ".$password;
    if($name!="" && $email != "" && $mobile != "" && $password != "")
    {
        header("Location:forms.php?status=done");
    }
    else{
        header("Location:forms.php?status=failed");
    }
}
?>