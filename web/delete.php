<html>
    <title>HTML Forms</title>
    <body>
        <form action="delete.php" method = "post">
            <p>Enter Email :
                <input type = "email" name = "email" value = "" 
                placeholder="Enter Email" size="20">
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
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "mydata";
    $con = mysqli_connect($host,$user,$pass,$db);
    $email = $_REQUEST["email"];   //case sensitive
    $password = $_REQUEST["pass"];   //case sensitive
    if($con){
       $query = "delete from users where email = '$email' and password = '$password'";
       if(mysqli_query($con,$query)){
           echo "Data Deleted";
       }
       else{
           echo "Data Not Deleted";
       }
    }
    else{
        echo "Error in Connection";
    }
    
    
}
?>