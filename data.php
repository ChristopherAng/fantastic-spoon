<?php
    extract($_REQUEST);
    $file=fopen("data.txt","a");

    fwrite($file,"name :");
    fwrite($file, $name ."\n");
    fwrite($file,"Email :");
    fwrite($file, $question ."\n");
    fclose($file)
    header("location: index.php");
 ?>
