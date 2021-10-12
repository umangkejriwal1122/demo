<?php
session_start();
if(!isset($_SESSION['status'])){
    header("Location:login.php");
}
?>

<title>Home</title>
<h3> Welcome !!</h3>
<?php
$status = $_SESSION['status'];
$email = $_SESSION["email"];
echo $email;
?>

<a href = "logout.php"><button>Logout</button></a>