<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
</head>
<body>
    <table width="100%" cellspacing="0" border="1">
    <tr>
        <th>Id</th>
        <th>City Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Offer</th>
        <th>Manage</th>
    </tr>
<?php
include "config.php";
$query = "select * from destination order by id desc";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)){	
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['city']."</td>";
    echo "<td>".$row['currency'].' '.$row['price']."</td>";
    echo "<td>".$row['description']."</td>";
    echo "<td>".$row['offer']."</td>";
    echo "<td><a href='update.php?id=$row[id]' target='_blank'>Edit Details</a>
    <a href='delete.php?id=$row[id]' target='_blank'>Delete</a>
    </td>";
    echo "</tr>";
}
?>

</table>
</body>
</html>