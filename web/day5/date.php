<?php
echo "<h3> Current Date</h3>";
echo date('d')."<br>";  
echo date('D')."<br>";
echo date('l')."<br>";
echo date('m')."<br>";
echo date('M')."<br>";
echo date('F')."<br>";
echo date('y')."<br>";
echo date('Y')."<br>";
echo date('D, d-m-Y')."<br>";

echo "<h3> Current Time</h3>";
date_default_timezone_set("Asia/Kolkata");
echo date('h')."<br>";  
echo date('H')."<br>";
echo date('i')."<br>";
echo date('s')."<br>";
echo date('a')."<br>";
echo date('H:i:s a')."<br>";
?>