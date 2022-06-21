<?php
$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["myfile"]["name"]);
$status = 1;
if (isset($_POST['submit'])){
    // check whether it is an image or not
    $check = getimagesize($_FILES["myfile"]["tmp_name"]);
    if($check){
        $status = 1;
    }
    else{
        echo "Invalid File! Please upload image only";
        $status = 0;
    }
    // check the size of file
    $size = $_FILES["myfile"]["size"];
    
    // check file exists or not
    if(file_exists($target_file)){
        echo "File Already Present";
        $status = 0;
    }

    // check for paticular formats
    $imageType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if($imageType !="jpg" && $imageType != "png" && $imageType !="jpeg"){
        echo "Please upload jpg or png file only";
        $status = 0;
    }

    if($status != 0){
        upload_file();
    }
    else{
        echo "File Not Uploaded";
    }

}

function upload_file(){
    global $target_file;
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"],$target_file)){
        echo "File uploaded";
    }
    else{
        echo "Problem in uploading the file";
    }
}
?>