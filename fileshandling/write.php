<?php


$files =  fopen("readme.txt","a+");
if($files){
    $word = "this text is written by fwrite methd";
    fwrite($files,$word);
    rewind($files);
  $b = fread($files ,filesize("readme.txt"));
  echo  $b . "<br>";
    fclose($files);
}
else{
echo "non work";
}

?>