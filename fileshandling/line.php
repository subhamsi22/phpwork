<?php

$files =  fopen("readme.txt","r");

if(isset($files)){
    while(($line =  fgets($files))!==false){
        echo $line ."<br>";
    }
    fclose($files);
}
?>