<title>File Handling</title>
<?php
// Write/Create a file
$name = "file.txt";
$file = fopen($name,'w');   // write purpose only
if ($file == false){
    echo "Error in creating file";
}
else{
    fwrite($file,"Hi! We are learning File Handling!");
    fclose($file);
    echo "<p>File Created</p>";
}

// append a file
$name = "file.txt";
$file = fopen($name,'a');   // append purpose only
if ($file == false){
    echo "Error in creating file";
}
else{
    fwrite($file,"We created this file using PHP!");
    fclose($file);
    echo "<p>File Appended</p>";
}

// Read a file

$name = "file.txt";
$file = fopen($name,'r');   // read purpose only
if ($file == false){
    echo "Error in opening file or file not present";
}
else{
    $size = filesize($name);
    $data = fread($file,$size);
    fclose($file);
    echo "File Size - $size bytes<br>";
    echo $data;
}

// delete a file

if(unlink("file.txt")){
    echo "<p>File Deleted</p>";
}
else{
    echo "<p>File Not Present</p>";
}

?>