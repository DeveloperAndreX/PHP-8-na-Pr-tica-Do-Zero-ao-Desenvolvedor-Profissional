<?php 

function saudaçao (): string
{
    $hora = -1;
    $saudacao = '';
    if($hora >=0 && $hora <= 5){
    $saudacao = 'boa madrugada';

    }
       
    $saudaçao = "boa Tarde";
    echo "<br>";
    // var_dump($saudacao);
    echo "<br>";
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









?>