<?php
session_start();
if(isset($_SESSION['status'])){
    header("Location:home.php");
}
?>
<html>
    <title>Forms in HTML</title>
    <body>
        <form action = "login.php" method = "POST" >
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
                <input type = "submit" value="Login" name = "submit">
                <input type = "reset" value="Reset">
            </p>
        </form>
    </body>
</html>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "mydata";
$con = mysqli_connect($host,$user,$pass,$db);
if(isset($_REQUEST['submit'])){
    $email = $_REQUEST['email'];
    $password = $_REQUEST['pass'];
    $query = "select * from user where email = '$email' and password = '$password'";
    $result = mysqli_query($con,$query);
    $count = mysqli_num_rows($result);
    if($count>0){
        header("Location:home.php");
        $_SESSION['status'] = "active";
        $_SESSION['email'] = $email;
    }
    else{
        echo "Login Failed";
    }
}
?>