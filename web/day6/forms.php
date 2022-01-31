<html>
    <title>Forms in HTML</title>
    <body>
        <form action = "data.php" method = "POST" >
            <p>
                Enter Name* : 
                <input type = "text" name = "name" value = "Umang" placeholder="Enter Name"
                required size = "30" maxlength = "20" >
            </p>
            <p>
                Enter Email* :
                <input type = "email" name = "email" placeholder="Enter Email"
                required size = "30" >
            </p>
            <p>
                Enter Password* :
                <input type = "password" name = "pass" placeholder="Enter Password"
                required size = "30" >
            </p>
            <p>
                Enter Mobile* :
                <input type = "number" name = "mobile" placeholder="Enter Mobile"
                required size = "30" >
            </p>
            <p>
                <input type = "submit" value="Register" name = "submit">
                <input type = "reset" value="Reset">
            </p>
        </form>
    </body>
</html>

<?php
if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $mobile = $_REQUEST['mobile'];
    $password = $_REQUEST['pass'];
    echo $name." ".$email." ".$mobile." ".$password."<br>";
}

if(isset($_REQUEST['status'])){
    $status = $_REQUEST['status'];
    if($status == "done"){
        echo "Form Submitted";
    }
    else{
        echo "Submittion Failed";
    }
}

?>