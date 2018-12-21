<?php
require_once "core/init.php";
if(isset($_POST['Send'])){


    // Update Student DEtails
$student = new Student($_POST['Id'],$_POST['Class'],$_POST['Section']);
//$student->update();   function for update

}


if(isset($_POST['delete'])){

    // Delete Student

$student = new Student($_POST['Id'],$_POST['Class'],$_POST['Section']);
echo $student->Delete()?"Deleted successfully":"Query failed";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>School Registeration</title>
</head>
<body>
    
<form action="" method="POST">

<input type="text" name="Id" id="" readonly value="1270441">
<input type="text" name="Class" id="" value="">
<input type="text" name="Section" id="" value="">
<input type="submit" value="submit" name="Send">
<input type="submit" value="Delete" name="delete">
</form>



</body>
</html>