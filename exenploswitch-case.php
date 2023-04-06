<?php

$cor= strtolower($_POST["cor"]);

switch($cor){
    case "vermelho":
        echo "<h1 style= 'color:red; '>cor vermelho</h1>";
        break;
    case "azul":
        echo "<h1 style= 'color:blue; '>cor azul</h1>";
        break;
    case "amarelo":
        echo "<h1 style= 'color:yellow; '>cor amarelo</h1>";
        break;
    default:
        echo "<h1 style= 'color:green; '>qualquer outra</h1>";
        break;

}
?>