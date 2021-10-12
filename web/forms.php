<html>
    <title>HTML Forms</title>
    <body>
        <form action="forms.php" method = "post">
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
       $email_query = "select * from users where email = '$email'";
       $result = mysqli_query($con,$email_query);
       $count = mysqli_num_rows($result);
       if($count != 0){
           echo "Email Already Exist";
       }
       else{
            $query = "insert into users(name,email,mobile,password)
            values('$name','$email','$mobile','$password')";
            if(mysqli_query($con,$query)){
                echo "Form Submitted";
            }
            else{
                echo "Form not submitted";
            }
       } 
       
    }
    else{
        echo "Error in Connection";
    }
    
    
}
?>