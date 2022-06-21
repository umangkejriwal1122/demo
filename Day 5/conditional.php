<?php
$day = date("D");
if($day == "Mon"){
    echo "Today is Monday<br>";  
}
else if($day == "Tue"){
    echo "Today is Tuesday<br>";  
}
else if($day == "Wed"){
    echo "Today is Wednesday<br>";  
}
else if($day == "Thu"){
    echo "Today is Thursday<br>";  
}
else if($day == "Fri"){
    echo "Today is Friday<br>";  
}
else if($day == "Sat"){
    echo "Today is Saturday<br>";  
}
else {
    echo "Today is Sunday<br>";  
}

switch($day){
    case "Mon" : echo "Today is Monday<br>";
    break;
    case "Tue" : echo "Today is Tuesday<br>";
    break;
    case "Wed" : echo "Today is Wednesday<br>";
    break;
    case "Thu" : echo "Today is Thursday<br>";
    break;
    case "Fri" : echo "Today is Friday<br>";
    break;
    case "Sat" : echo "Today is Saturday<br>";
    break;
    default : echo "Today is Sunday<br>";
    break;
}

?>