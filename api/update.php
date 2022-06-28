<?php
include "config.php";
$query = "select * from destination where id = '$_GET[id]'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Destination</title>
</head>
<body>
    <h3 align="left"> Update Destination Form </h3>
    <form action="update_data.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
           Enter City*: 
           </td>
           <td>
           <input type="text" name="city" value="<?php echo $row['city'];?>" placeholder="Enter City Name"
            maxlength="20" size="20" required>
            </td>
            </tr>
            <tr>
                <td>
                    Enter Description:
                </td>
                <td>
                    <textarea name="description" rows="4" cols="20"><?php echo $row['description'];?></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    Enter Price*: 
                </td>
                <td>
                    <input type="number" name="price" value="<?php echo $row['price'];?>" placeholder="Enter Price"
                    maxlength="10" required>
                </td>
            </tr>
            <tr>
                <td>
                    Select Currency:
                </td>
                <td>
                    <select name="currency">
                        <option value="USD" <?php if ($row['currency'] == "USD"){echo "selected";}?>>US Dollars</option>
                        <option value="INR"<?php if ($row['currency'] == "INR"){echo "selected";}?>>Indian Rupees</option>
                        <option value="JPY"<?php if ($row['currency'] == "JPY"){echo "selected";}?>>Japanese Yens</option>
                        <option value="KRW"<?php if ($row['currency'] == "KRW"){echo "selected";}?>>Korean Wons</option>
                        <option value="GBP"<?php if ($row['currency'] == "GBP"){echo "selected";}?>>British Pounds</option>
                        <option value="EUR"<?php if ($row['currency'] == "EUR"){echo "selected";}?>>Euros</option>
                    </select> 
                </td>
            </tr>
            <tr>
                <td>
                    Offer:
                </td>
                <td>
                    <input type="radio" name="offer" value="Yes" <?php 
                    if ($row['offer'] == "Yes"){
                        echo "checked";
                    }
                     ?> >Yes
                    <input type="radio" name="offer" value="No"
                    <?php 
                    if ($row['offer'] == "No"){
                        echo "checked";
                    }
                     ?>
                    >No
                </td>
            </tr>
            </table>
        <p align="left">
            <input type="hidden" name = "id" value="<?php echo $_GET['id']; ?>">
            <input type="submit" value="Update" name = "submit">
            <input type="reset" value="Reset">
        </p>
    </form>
</body>
</html>
