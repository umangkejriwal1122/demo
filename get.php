<?php

$host = "localhost";
$user = "id13542978_corona";
$pass = "Umang@19921992";
$db = "id13542978_covid";

$connection = mysqli_connect($host,$user,$pass,$db);

$sql = "select * from india order by states asc";

$res = mysqli_query($connection,$sql);  ###execute the query

$result = array();   ##declared a blank array

while($row=mysqli_fetch_array($res)){
	array_push($result,array('states'=>$row['states'],
							'confirmed'=>$row['confirmed'],
							'recovered'=>$row['recovered'],
							'deaths'=>$row['deaths'],
							'lat'=>$row['lat'],
							'longi'=>$row['longitude'],
							'active'=>$row['active']));
}

echo json_encode(array('covid'=>$result));

mysqli_close($connection);

?>
