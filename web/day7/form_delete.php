<html>
    <title>Forms in HTML</title>
    <body>
        <form action = "delete.php" method = "POST" >
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
                <input type = "submit" value="Delete" name = "submit">
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
                echo "Data Deleted";
                break;
            case "failed":
                echo "Data Deletion Failed";
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