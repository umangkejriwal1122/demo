<title>File Handling</title>
<?php
// Reading of file
$name = "file.txt";
$file = fopen($name,"r");
if ($file == false){
    echo "Error in opening of file";
}
else{
    $size = filesize($name);
    $data = fread($file,$size);
    fclose($file);
    echo "<h2>File Size - $size bytes</h2>";
    echo "<h3>$data</h3>";
}

// Writing of file
$file = fopen("newfile.txt","w");  // keeps cursor at beginning and overwrite the data
//$file = fopen("newfile.txt","a"); // keeps cursor at end and append the data
if ($file == false){
    echo "Error in opening of file";
}
else{
    fwrite($file,"Hello Everyone ! How are you?");
    fclose($file);
}

// delete the file

if(unlink("umang.txt")){
    echo "umang.txt is deleted";
}
else{
    echo "Error";
}

?>