<?php 

$nome = "teuzo";

function exibenome() {
     global $nome;
    echo $nome;

}

exibenome();
echo "<hr>";
echo "<hr>";
echo "<hr>";

$cidades = "SP";

function cidades( ) {
    global $cidades;
    echo( $cidades);

}

cidades();
