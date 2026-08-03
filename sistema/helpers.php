<?php

declare(strict_types=1);
function saudaçao(): string
{
    $tz = date_default_timezone_set('America/Sao_Paulo');
    echo $hora = date('H:i:s:sP');
    echo "<br>";

    if ($hora >= 0 and $hora <= 5) {
        $saudacao = ucfirst("boa madrugada <br>");
        if ($tz == 1):
            $text = "location: America/Sao_Paulo";
            echo ucwords($text);
        elseif ($tz == 0 || $tz !== -1):
            $text1 = "location: Outro Continente diferente";
            echo ucwords($text1);
        endif;
    } elseif ($hora >= 6 and $hora <= 12) {

        $saudacao = ucfirst("Bom dia!! <br>");
    } elseif ($hora >= 13 and $hora <= 18) {

        $saudacao = ucfirst("Boa Tarde!! <br>");
    } else {
        //Saudação Default
        $saudacao = ucfirst("Boa Noite <br>");
    }

    echo "<br>";

    return $saudacao;
}

function resumirTexto(string $texto,  int $limite, string $continue, string $texto2): string
{

    $textoLimpo = trim($texto);  // texto sem ponto e traços e espaços
    if (mb_strlen(strip_tags(ucfirst($textoLimpo))) <= $limite):
        return $textoLimpo;
    endif;

    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));

    return $resumirTexto . $continue;
}

function receberSalario(float $salario, float $adicionalNoturno): float
{
    $result = $salario + $adicionalNoturno;


    if ($salario >= 0.00  and $salario <= 600.00 and $result > 100) {
        echo "Tipo de Dado e: " . gettype($salario) . "<br>";
        echo "O salario recebido foi menor que o minimo: R$ {$salario} reais <br>";
        echo "e com o adicional o total recebido foi de: {$result}";
    } elseif ($salario >= 600.00 and $salario <= 1621.00) {
        echo "Tipo de dado e: " . gettype($salario) . "<br>";
        echo "O salario recebido esta dentro do esperado: R$ {$salario} reais";
    } elseif ($salario >= 1621.00 || $salario <= 2000.00) {
        echo "O seu salario esta entre o minimo de: R$ {$salario} e 2000.00 que e o Maximmo.";
    } else {
        echo "O seu Salario Utrapassa 2.000,00 reais e esta no valor de R$ {$salario}";
    }

    echo "<br>";
    return $salario + $adicionalNoturno;
}

/*
exemplo utilizando ARRAYS:
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
