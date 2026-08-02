<?php

function saudaçao(): string
{
    $hora =  8;

    if ($hora >= 0 and $hora <= 5) {
        $saudacao = 'boa madrugada';
    } elseif ($hora >= 6 and $hora >= 12) {

        $saudacao = "Bom dia!!";
    } elseif ($hora >= 13 and $hora <= 18) {

        $saudacao = "Boa Tarde!!";
    } else {
        $saudacao = "Boa Noite";
    }

    echo "<br>";
    // var_dump($saudacao);
    return $saudacao;
}

function resumirTexto(string $texto,  int $limite, string $continue, string $texto2): string
{

    return $texto;
}

/*
function dadosUsuarios () {
    $nome = "ana";
    $idade = 50;

    // return this values it two variables:
    return [$nome, $idade];
}

[$nomerecebido,$idaderecebida] = dadosUsuarios();
print($nomerecebido);
echo "<br>";
print($idaderecebida);
echo "<br><br>";

*/
