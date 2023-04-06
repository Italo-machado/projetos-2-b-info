<?php
$n1=$_POST['n1'];
$n2= $_POST['n2'];
$n3= $_POST['n3'];
$media = (($n1 * 0.2)+($n2 * 0.3) + ($n3 * 0.5))/3;
echo "o resultado é :".$media;

?>