<?php

function saudaçao(): string
{
    $hora =  20;

    if ($hora >= 0 and $hora <= 5) {
        $saudacao = 'boa madrugada';

    } elseif ($hora >= 6 and $hora <= 12) {

        $saudacao = "Bom dia!!";
    } elseif ($hora >= 13 and $hora <= 18) {

        $saudacao = "Boa Tarde!!";

    } else {
        //Saudação Default
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

function receberSalario( float $salario): float
{ 

if($salario >=0.00  AND $salario <= 600.00)
    {
        echo "Tipo de Dado e: " . gettype($salario) . "<br>"; 
        echo "O salario recebido foi menor que o minimo: R$ {$salario} reais";

    }elseif($salario >=600.00 AND $salario <= 1621.00){
        echo "Tipo de dado e: " . gettype($salario) . "<br>";
        echo "O salario recebido esta dentro do esperado: R$ {$salario} reais";

    }elseif($salario >= 1621.00 || $salario <= 2000.00) {
        echo "O seu salario esta entre o minimo de: R$ {$salario} e 2000.00 que e o Maximmo.";

    }else{
        echo "O seu Salario Utrapassa 2.000,00 reais e est[a no valor de R$ {$salario}";

    }
    
    echo "<br><br>";
    return "Valor final recebido: . $salario";

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
