<html>
    <title>HTML Forms</title>
    <body>
        <form action="data.php" method = "post">
            <p>Enter Name :
            <input type = "text" name = "name" value = "" 
            placeholder="Enter Name" maxlength="10" size="20">
            </p>
            <p>Enter Email :
                <input type = "email" name = "email" value = "" 
                placeholder="Enter Email" size="20">
            </p>
            <p>Enter Mobile :
                <input type = "number" name = "mob" value = "" 
                placeholder="Enter Mobile" maxlength = "10" size="20">
            </p>
            <p>Enter Password :
                <input type = "password" name = "pass" value = "" 
                placeholder="Enter Password" size="20">
            </p>
            <input type = "submit" value = "Submit" name = "submit" />
        </form>
    </body>
</html>

<?php
if(isset($_REQUEST['submit'])){
    $name = $_REQUEST["name"];   //case sensitive
    $email = $_REQUEST["email"];   //case sensitive
    $mobile = $_REQUEST["mob"];   //case sensitive
    $password = $_REQUEST["pass"];   //case sensitive
   // echo $name." ".$email." ".$mobile." ".$password;
    echo "Data Submitted";
}
if(isset($_REQUEST["status"])){
    $status = $_REQUEST["status"];
    if($status == "done"){
        echo "Form Submitted";
    }
    else{
        echo "Form Failed";
    }
}
?>