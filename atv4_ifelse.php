<?php
$horas=$_POST['horas'];
$codigo=$_POST['codigo'];
$sb = $horas*10;
$se= $horas - 50;
$st = $sb + $se;
if($se > 0){
    echo (500+($se * 20)." <br> codigo: ".$codigo );
}else{
    echo ($st. " codigo: ".$codigo);
}



?>