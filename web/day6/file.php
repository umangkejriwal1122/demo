<title>File Handling</title>
<?php
// Read a file
$name = "file.txt";
$file = fopen($name,'r');  // reading purpose only
if($file == false){
    echo "Error in opening the file";
}
else{
    $size = filesize($name);
    $data = fread($file,$size);
    fclose($file);
    echo "File Size - $size bytes<br>";
    echo $data;
}

// Write the file
// w - create file and write data inf not present, if present it overwrite the data
//$file = fopen("newfile.txt",'w'); // writing purpose only
$file = fopen("newfile.txt",'a'); // appending purpose only
if($file == false){
    echo "Error in opening or creating the file";
}
else{
    fwrite($file,"I am teaching File Handling.");
    fclose($file);
    echo "<br>File Created<br>";
}
// delete the file
if(unlink("newfile.txt")){
    echo "File Deleted";
}
else{
    echo "File Not Present";
}
?>