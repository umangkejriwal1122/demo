<?php
function greetings(){
    echo "<p>Namaste !!</p>";
}
greetings();
greetings();

function calc($a,$b,$c){
    switch ($c){
        case "+":
            $result = $a + $b;
            echo "<p>$result</p>";
            break;
        case "-":
            $result = $a - $b;
            echo "<p>$result</p>";
            break;
        case "*":
            $result = $a * $b;
            echo "<p>$result</p>";
            break;
        case "/":
            $result = $a / $b;
            echo "<p>$result</p>";
            break;
        default:
            echo "<p>Invalid Operation</p>";
    }
}

calc(10,20,"+");
calc(10,20,"-");
calc(10,20,"*");
calc(10,20,"/");
calc(10,20,"a");

function calc_default($a,$b,$c="+"){
    switch ($c){
        case "+":
            $result = $a + $b;
            echo "<p>$result</p>";
            break;
        case "-":
            $result = $a - $b;
            echo "<p>$result</p>";
            break;
        case "*":
            $result = $a * $b;
            echo "<p>$result</p>";
            break;
        case "/":
            $result = $a / $b;
            echo "<p>$result</p>";
            break;
        default:
            echo "<p>Invalid Operation</p>";
    }
}

function calc_default_return($a,$b,$c="+"){
    switch ($c){
        case "+":
            $result = $a + $b;
            return $result;
            break;
        case "-":
            $result = $a - $b;
            return $result;
            break;
        case "*":
            $result = $a * $b;
            return $result;
            break;
        case "/":
            $result = $a / $b;
            return $result;
            break;
        default:
            return "Invalid Operation";
    }
}

calc_default(10,20);
calc_default(10,20,"*");

$res1 = calc_default(10,20);
echo "res1 = ".$res1."<br>";

$res2 = calc_default_return(10,20);
echo "res2 = ".$res2."<br>";
?>