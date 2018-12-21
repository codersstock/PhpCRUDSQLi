<?php

if(isset($_POST['send'])){

  

$allowed_extension = array("jpeg","png","jpg");
$error = array();
    $file_name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$file_path = "images/" . $file_name;
$type = $_FILES['image']['type'];
$size = $_FILES['image']['size'];
$ext = strtolower(end(explode('.',$file_name)));

if($size>200000){
$error[] = "File size must be under 2mb";
}

if(in_array($ext,$allowed_extension)===false){
 $error[] = "Extension not allowed rather than png,jpg";   
}

if(empty($error)){
move_uploaded_file($tmp_name,$file_path);
echo "File uploaded successfully";
}

else{
foreach($error as $errors => $value){
    echo $value . "<br>";
}

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
