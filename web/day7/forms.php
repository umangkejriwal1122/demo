<html>
    <title>Forms in HTML</title>
    <body>
        <form action = "insert.php" method = "POST" >
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
    if(isset($_REQUEST['status'])){
        $status = $_REQUEST['status'];
        switch($status){
            case "done":
                echo "Form Submitted";
                break;
            case "failed":
                echo "Form Submission Failed";
                break;
            case "empty":
                echo "Form Data is empty";
                break;
            default: 
                echo "Invalid Request";
                break; 
        }
    }
?>