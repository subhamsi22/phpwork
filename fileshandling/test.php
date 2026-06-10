<?php 
$files =  fopen("readme.txt","r");
if($files){
    echo "files is opend";
    fclose($files);

    }
    else{
        echo "file is not open";
    }


?>