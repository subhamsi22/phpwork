<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $password =  $_POST['password'];
    echo "the name of the user is : ". $name;
    echo "the email of the user is :".$email;
    echo "the password of that user is :".$password;
// now we create  a log file 
$data =  "the name of the user is :" .$name."<br>".
"the email of the user is ".$email ."<br>".
"the password of the user is".$password;

$files = fopen("log.txt","a+");
fwrite($files,$data);
fclose($files);



}else{
    echo "the data is not come";
}


?>