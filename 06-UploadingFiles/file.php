<?php

if(isset($_POST['send'])){

/*    echo "<pre>";
print_r($_FILES['image']);
*/

$Upload_errors = array(
UPLOAD_ERR_OK => "File Uploaded there is no error",
UPLOAD_ERR_INI_SIZE => "file size limit exceeds",
UPLOAD_ERR_FORM_SIZE => "form file size limit exceeds",
UPLOAD_ERR_PARTIAL => "file partially uload plz try again ",
UPLOAD_ERR_NO_FILE => "no file was uploaded",
UPLOAD_ERR_NO_TMP_DIR  => "there is no temorary folder/directory where file save",
UPLOAD_ERR_CANT_WRITE => "Failed to write file to disk",
UPLOAD_ERR_EXTENSION  => "A PHP Extension stopped the file upload"
);

$error = $_FILES['image']['error'];
$themessage = $Upload_errors[$error];
    
$tmp_name = $_FILES['image']['tmp_name'];
$file_path = "images/" . $_FILES['image']['name'];
$type = $_FILES['image']['type'];
$size = $_FILES['image']['size'];


if($size<1536000 && $type=="image/png"){
move_uploaded_file($tmp_name,$file_path);
}
else{
    echo "Plz Upload png image only ";
}


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Uploading</title>
</head>
<body>
    
<form action="" method="POST" enctype="multipart/form-data">

<input type="file" name="image">
<input type="submit" name="send" value="submit">

<?php if(!empty($Upload_errors))

echo "<h5>". $themessage ."</h5>";
?>

</form>




</body>
</html>
