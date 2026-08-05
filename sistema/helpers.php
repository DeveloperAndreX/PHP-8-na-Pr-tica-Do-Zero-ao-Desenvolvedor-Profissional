<?php

//declare(strict_types=1);

/**
 * @author Andre Panizza
 * @param float $value recebe um valor do tipo float e retorna uma função formatada.
 * @param int $transform Opcional parametro que armazena um inteiro e tira os espaços vazios (trim) e retorna uma função formatada de $transform
 * 
 */

function contarTempo(string $data)
{
    $agora = strtotime(date('Y-m-d H:i:s'));
    $tempo = strtotime($data);
    $diferenca = ($tempo - $agora);

    $segundos = $diferenca;
    $minutos =  round($diferenca / 60);  
    $horas =  round($diferenca / 3.600);
    $dias = round($diferenca / 86.400);
    $semanas = round($diferenca / 604.800);
    $meses = round($diferenca /  2419200);
    $anos = round($diferenca / 29030400);

   if($segundos <= 60):
       return 'Agora';
    elseif($minutos <= 60):
        return $minutos == 1 ? 'há um minuto' : $minutos . "minutos"; 
    elseif($horas <= 24):
        return $horas == 1 ? 'há uma hora' : 'ha' . $horas .' horas ';
    elseif($dias <= )
   endif;

    
    //return "Vou retornar o valor da <b>variavel:</b> {$agora})<br> e o <b>Ultimo</b> valor: {$depois} \n" . PHP_EOL;
           

}


function formatarValor(?float $value = null): string
{

    return "R$ " . number_Format(($value ? $value : 0), 2, ',', '.') . PHP_EOL;
    exit(0);
}

/**
 * @param float $num1 receberá um numero a ser formatado em reais
 * @param float $num2 receberá segundo numero a ser formatada
 * @param float $num3 receberá terceiro e ultimo numero para validação com ternario e retorno de função formatada!
 */
// desafio de formatação de numeros:
function formatarNumeros(?float $num1 = null, ?float $num2 = null, ?float $num3 = null): string
{
    return "Valor 1 do num1 em R$: " . number_format(($num1 ? $num1 : 0), 2, ',', '.') . "<br>" .
        "Valor 2 do num2 em R$: " . number_format(($num2 ? $num2 : 0), 2, ',', '.') . "<br>" .
        "Valor 3 do num3 em R$: " . number_format(($num3 ? $num3 : 0), 2, ',', '.') . "<br>";
    exit(0);
}

/**
 * Formata uma string numérica para o padrão de milhar americano.
 *
 * @category Helper
 * @package  Sistema
 * @author   Andre Panizza <andredeveloper45@gmail.com>
 * @license  https://opensource.org MIT License
 * 
 * @param string|null $number O número em formato de string ou nulo a ser formatado.
 * 
 * @return string O número formatado com separador de milhar (ex: "1,250").
 */
//Exemplo do Professor:
function formatarNumbers(?int $number = null):string
{
    // return number_format($number ? (float($number)) : 0, 0 ,'.',',');
    return number_format(($number ? $number : 0), 0, '.', ',');
    
}

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

/**
 *   * 
 * @author My Name Andre Panizza
 * @author My Name <andredeveloper45@gmail.com>
 * @version GIT in development. not is unstable, example make create in https://https://github.com/DeveloperAndreX. inside repository the      name PHP.
 * @param string $texto texto para Resumir
 * @param int    $limite  quantidade de caracteres
 * @param string $continue  parametro Opcional - O que deve ser exibido ao final do resumo ou adicionar um link.
 * @param string $texto2 parametro Opcional - espera receber uma String finalização.
 * @return string Texto resumido.
 * 
 */

function resumirTexto(string $texto,  int $limite, string $continue, string $texto2): string
{

    $textoLimpo = trim($texto);  // texto sem ponto e traços e espaços
    if (mb_strlen(strip_tags(ucfirst($textoLimpo))) <= $limite):
        return $textoLimpo;
    endif;

    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));

    return $resumirTexto . $continue;
}

/**
 * @param float $salario variavel que recebe salario base do trabalhador
 * @param float $adicionalNoturno parametro recebe horas adicionais trabalhadas
 * @param float $result Opcional, realiza a soma dos valores salario + adicionalNoturno;
 * 
 */

function receberSalario(float $salario, float $adicionalNoturno): float
{
    $result = floatval($salario + $adicionalNoturno);



    if ($salario >= 0.00  and $salario <= 600.00 and $result > 100) {
        echo ucfirst("Tipo de Dado e: " . gettype($salario) . "<br>");
        echo ucfirst("O salario recebido foi menor que o minimo: R$ {$salario} reais <br>");
        echo ucfirst("e com o adicional o total recebido foi de: {$result}");
    } elseif ($salario >= 600.00 and $salario <= 1621.00) {
        echo ucfirst("Tipo de dado e: " . gettype($salario) . "<br>");
        echo ucfirst("O salario recebido esta dentro do esperado: R$ {$salario} reais");
    } elseif ($salario >= 1621.00 || $salario <= 2000.00) {
        echo ucfirst("O seu salario esta entre o minimo de: R$ {$salario} e 2000.00 que e o Maximo.");
    } else {
        echo ucfirst("O seu Salario Utrapassa 2.000,00 reais e esta no valor de R$ {$salario}");
    }

    echo "<br>";
    return ($salario + $adicionalNoturno);
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
