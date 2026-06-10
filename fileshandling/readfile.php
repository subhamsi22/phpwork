<?php

$files =  fopen("readme.txt","r");

$content = fread($files,filesize("readme.txt"));
if($content){
    echo $content;
    fclose($files);
}
else{
    echo "file is not readable ";
}

?>