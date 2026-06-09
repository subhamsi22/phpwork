<?php
if(isset($_FILES['filesofhtml'])){
    $file_name =  $_FILES['filesofhtml']['name'];
     $file_temp =  $_FILES['filesofhtml']['tmp_name'];
     echo "file name ".$file_name;
     move_uploaded_file($file_temp,"upload/".$file_name);
}


?>