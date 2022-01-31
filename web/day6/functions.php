<title>Functions in PHP</title>
<?php

function greetings(){
    echo "<h5> Hello Everyone </h5>";
}

//greetings();
//greetings();
//greetings();

function add($a1,$a2){
    echo "<h5>The addition is ".$a1+$a2."</h5>";
}
//add(10,20);
//add(30,20);
//add(5,20);

function read_my_file($name){
    $file = fopen($name,'r');  // reading purpose only
if($file == false){
    echo "Error in opening the file<br>";
}
else{
    $size = filesize($name);
    $data = fread($file,$size);
    fclose($file);
    echo "File Size - $size bytes<br>";
    echo $data."<br>";
}
}

//read_my_file("file.txt");

function read_my_file_data($name){
    $file = fopen($name,'r');  // reading purpose only
if($file == false){
    echo "Error in opening the file";
}
else{
    $size = filesize($name);
    $data = fread($file,$size);
    fclose($file);
    return $data;
}
}
//$mydata = read_my_file_data('file.txt');
//echo $mydata;

function write_file($name,$data){
    $file = fopen($name,'a'); // appending purpose only
    if($file == false){
        echo "Error in opening or creating the file";
    }
    else{
        fwrite($file,$data);
        fclose($file);
       // echo "<br>File Created<br>";
    }
}
//write_file("umang.txt","Hi");
?>