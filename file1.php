<?php

$file = "sourabh1.txt";

if(file_exists($file))
{
    echo readfile("sourabh1.txt");
    rename("sourabh1.txt","sd2.txt");
    unlink("sd2.txt");
}
    else
    { 
    echo "file does not exist";
}
?>