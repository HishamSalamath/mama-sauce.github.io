<?php

$file = $_GET['file'] . ".pdf" ;

header("content-disposition:attachment; filename=".urlencode($file));

header("Content-Type: application/force-download");

$fb = fopen($file,"r");

while(!feof($fb))
{
    echo fread($fb, 8192);
    flush();
}
fclose($fb);

?>

