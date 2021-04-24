<?php
if( isset($_POST['name'] ) && isset( $_POST['question'] ) )
{
    $txt= $_POST['name'].' - '.$_POST['question'] . PHP_EOL; 
    file_put_contents('fields.txt', $txt, FILE_APPEND);
}
?>
