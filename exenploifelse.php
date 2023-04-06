<?php

$nota1 = 1;
$nota2 = 1;
$media = ($nota1 + $nota2)/2;
if ($media < 2){ 
echo "reprovado sem recuperaçao. meida: ".$media;
}else{
    if($media < 5){
    echo"recuperaçao. media: ".$media;
}else{
if($media >= 7){
    echo "bom. media: ".$media;
}else{
    echo"muito bom. media: ".$media;
}


}

}


?>