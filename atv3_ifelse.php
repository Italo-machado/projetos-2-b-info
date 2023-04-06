<?php
$peso=$_POST['peso'];
$multa = ($peso - 50);
if($multa < 0){
echo ($multa * 4 ." "."verificaçao concluida");

}else{
    echo ($peso ." "."verificaçao concluida");
}
?>