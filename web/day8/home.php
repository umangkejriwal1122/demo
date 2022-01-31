<title>Home</title>
<?php
session_start();
if(!isset($_SESSION['status'])){
    header("Location:login.php");
}
else{
    echo "<center><h3>Welcome</h3>";
    echo $_SESSION['email']."</center>";
}
?>
<br>
<center><a href = "logout.php"><button>Logout</button></a></center>