<title>Functions in PHP</title>
<?php

function greetings(){
    echo "<p>Hi Everyone</p>";
}
//greetings();
//greetings();
//greetings();

function add($a,$b){
    $c = $a + $b;
    echo "<p>The sum is $c</p>";
}
//add(10,30);
//add(40,30);
//add(30,555);

function write_my_file($name,$data){
    $file = fopen($name,"w");  // keeps cursor at beginning and overwrite the data
    if ($file == false){
        echo "Error in opening of file";
    }
    else{
        fwrite($file,$data);
        fclose($file);
    }
}
$data1 = "Hi Everyone";
$data2 = "Good Evening";
$data3 = "All the best";

//write_my_file("file1.txt",$data1);
//write_my_file("file2.txt",$data2);
//write_my_file("file3.txt",$data3);

function read_my_file($name){
    $file = fopen($name,"r");
    if ($file == false){
        echo "Error in opening of file";
    }
    else{
        $size = filesize($name);
        $data = fread($file,$size);
        fclose($file);
        echo "<h3>$data</h3>";
    }
}

function read_my_file_data($name){
    $file = fopen($name,"r");
    if ($file == false){
        echo "Error in opening of file";
    }
    else{
        $size = filesize($name);
        $data = fread($file,$size);
        fclose($file);
        return $data;
    }
}

//read_my_file("file1.txt");
//read_my_file("file2.txt");
//echo read_my_file_data("file3.txt");
//$text = read_my_file_data("file3.txt");
//echo "<p>The data is ".$text."</p>";
?>