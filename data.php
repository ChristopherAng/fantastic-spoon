<?php
              
if(isset($_POST['question']))
{
$data=$_POST['question'];
$fp = fopen('fields.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>
