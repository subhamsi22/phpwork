<?php
header("Content-Type:application/pdf");


$file = $_GET['file'].".pdf";
header("Content-Disposition:attachment; filename".$file)
?>