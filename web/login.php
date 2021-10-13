<?php
session_start();
if(isset($_SESSION['status'])){
    header("Location:home.php");
}
?>
<html>
    <title>HTML Forms</title>
    <body>
        <form action="login.php" method = "post">
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

<a href = "forms.php"><button>New User? Signup</button></a>

<?php
if(isset($_REQUEST['submit'])){
$host = "localhost";
$user = "root";
$pass = "";
$db = "mydata";
$con = mysqli_connect($host,$user,$pass,$db);

if($con){
    $email = $_REQUEST["email"];   //case sensitive
    $password = $_REQUEST["pass"];
    $query = "select * from users where email='$email' and password = '$password'";
    $result = mysqli_query($con,$query);
    $count = mysqli_num_rows($result);
    if ($count>0){
        $_SESSION['status'] = "active";
        $_SESSION['email'] = $email;
        header("Location:home.php");
    }
    else{
        echo "Login Failed";
    }
}
else{
    echo "Connection Error";
}
}
?>