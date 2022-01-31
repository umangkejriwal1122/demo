<?php
$pass = "umang123";
$value = "A!@SWU^#&BN)$&*VKNLJC&X^%EHJC&E6523b@#*&^hfyvd";
$salt = sha1(md5($value));
$salt_md5 = md5($salt);
$password = sha1(md5($pass.$salt_md5));
echo $password."<br>";

$new_pass = "umang123";
$salt = sha1(md5($value));
$salt_md5 = md5($salt);
$new_pass = sha1(md5($new_pass.$salt_md5));
if ($new_pass == "e28417908e79f229d7df1cd66607b6224e63ebff"){
    echo "True";
}
else{
    echo "False";
}
?>