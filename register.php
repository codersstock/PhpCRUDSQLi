<?php
require_once "core/init.php";
if(isset($_POST['Send'])){




$student = new Student($_POST['Id'],$_POST['Class'],$_POST['Section']);
if($student->add()){        // add student
echo "Student created Successfully";
echo $student->id;




}


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

<input type="text" name="Id" id="">
<input type="text" name="Class" id="">
<input type="text" name="Section" id="">
<input type="submit" value="submit" name="Send">
</form>



</body>
</html>