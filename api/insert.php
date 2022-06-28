<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Destination</title>
</head>
<body>
    <h3 align="left"> Insert Destination Form </h3>
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
           Enter City*: 
           </td>
           <td>
           <input type="text" name="city" value="" placeholder="Enter City Name"
            maxlength="20" size="20" required>
            </td>
            </tr>
            <tr>
                <td>
                    Enter Description:
                </td>
                <td>
                    <textarea name="description" rows="4" cols="20"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    Enter Price*: 
                </td>
                <td>
                    <input type="number" name="price" value="" placeholder="Enter Price"
                    maxlength="10" required>
                </td>
            </tr>
            <tr>
                <td>
                    Select Currency:
                </td>
                <td>
                    <select name="currency">
                        <option value="USD">US Dollars</option>
                        <option value="INR">Indian Rupees</option>
                        <option value="JPY">Japanese Yens</option>
                        <option value="KRW">Korean Wons</option>
                        <option value="GBP">British Pounds</option>
                        <option value="EUR">Euros</option>
                    </select> 
                </td>
            </tr>
            <tr>
                <td>
                    Offer:
                </td>
                <td>
                    <input type="radio" name="offer" value="Yes" checked>Yes
                    <input type="radio" name="offer" value="No">No
                </td>
            </tr>
            <tr>
                <td>
                    Upload Image:
                </td>
                <td>
                    <input type="file" name = "myImage" accept="image/*">   
                </td>
            </tr>
            </table>
        <p align="left">
            <input type="submit" value="Insert" name = "submit">
            <input type="reset" value="Reset">
        </p>
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){

    include "config.php";
    $city = $_POST['city'];
    $desc = $_POST['description'];
    $curr = $_POST['currency'];
    $price = $_POST['price'];
    $offer = $_POST['offer'];
    $target_dir = "../images/uploads/";
    $target_file = $target_dir.basename($_FILES["myImage"]["name"]);
    $image = $_FILES["myImage"]["name"];
    $query = "insert into destination(city,description,currency,price,offer,image)
    values('$city','$desc','$curr','$price','$offer','$image')";
    if(mysqli_query($con,$query)){
        if(move_uploaded_file($_FILES["myImage"]["tmp_name"],$target_file)){
            echo "Destination Added";
        }
        else{
            echo "Failed to Upload the file";
        }
    }
    else{
        echo "Failed to insert Destination";
    }
}

?>
