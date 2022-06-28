<?php
    session_start();
    if(isset($_SESSION['email'])){
        header("Location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container" style="margin-top: 100px; margin-bottom:20px;">
        <div class="row">
                <div class="col">
                    <div class="card" style="padding: 20px; background-color:cornsilk;">
                        <h4 style="text-align: center; color:cadetblue; font-weight:700;margin-bottom:20px;">User Login</h3>
                        <form method= "post" action="login.php">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Email</span>
                            <input name = "email" type="email" class="form-control" placeholder="Enter Email" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Password</span>
                            <input type="password" name="pass" class="form-control" placeholder="Enter Password" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div>
                            <center><input type="submit" value="Login" name = "login"
                            class="btn btn-success"></center>
                        </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>

<?php

if(isset($_POST['login'])){
    include "api/config.php";
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $query = "select * from users where email = '$email' and password = '$pass'";
    $result = mysqli_query($con,$query);
    $count = mysqli_num_rows($result);
    if($count>0){
        $row = mysqli_fetch_array($result);
        $name = $row['name'];
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        echo "<center><h5>User Exist</h5></center>";
        header("Location:index.php");
    }
    else{
        echo "<center><h5>Invalid Email/Password or User don't exists</h5></center>";
    }
}

?>