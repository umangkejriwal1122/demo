<html>
    <title>HTML Forms</title>
    <body>
        <form action="update.php" method = "post">
        <p>Enter Email :
                <input type = "email" name = "email" value = "" 
                placeholder="Enter Email" size="20">
            </p>
            <p>Enter Name :
            <input type = "text" name = "name" value = ""
            placeholder="Enter Name" size="20">
            </p>
            <p>Enter Mobile :
                <input type = "number" name = "mob" value = "" 
                placeholder="Enter Mobile" maxlength = "10" size="20">
            </p>
            <p>Enter Password :
                <input type = "password" name = "pass" value = "" 
                placeholder="Enter Password" size="20">
            </p>
            <input type = "submit" value = "Update" name = "submit" />
        </form>
    </body>
</html>

<?php
if(isset($_REQUEST['submit'])){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "mydata";
    $con = mysqli_connect($host,$user,$pass,$db);
    $name = $_REQUEST["name"];   //case sensitive
    $email = $_REQUEST["email"];   //case sensitive
    $mobile = $_REQUEST["mob"];   //case sensitive
    $password = $_REQUEST["pass"];   //case sensitive
    if($con){
       $query = "update users set name = '$name',mobile = '$mobile',
       password='$password' where email = '$email'";
       if(mysqli_query($con,$query)){
           echo "Form Updated";
       }
       else{
           echo "Form not updated";
       }
    }
    else{
        echo "Error in Connection";
    }
    
    
}
?>