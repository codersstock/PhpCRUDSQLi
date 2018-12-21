<?php

echo __FILE__ . "<br>";          // Path of file where you r
echo __DIR__. "<br>";              // Path of file where you r
echo __LINE__. "<br>";       // Execution line of this code where i write this comment

// if there is file exists in current dir by magic __DIR__ method

if(file_exists(__DIR__)){
    echo "files exits on current directory". "<br>";
}


// is_dir() and is_file() function for checking dir or files that they are??


echo is_dir(__DIR__)?"Yes this is directory":"no this is not a directory"; echo "<br>";
echo is_dir(__FILE__)?"Yes this is directory":"no this is not a directory";echo "<br>";

echo is_file(__DIR__)?"Yes this is file":"no this is not a file"; echo "<br>";
echo is_file(__FILE__)?"Yes this is file":"no this is not a file";echo "<br>";



?>