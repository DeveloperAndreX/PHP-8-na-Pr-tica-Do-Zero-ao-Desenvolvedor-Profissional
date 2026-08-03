<?php
// Exemplo pratico de como utilizar o Array_Map formatando com number_format();
/**
 * @author Andre Panizza
 * @var   $numeros recebe o valor do array com 3 posições.
 * @param $valor parametro a ser recebido para e será aplicado no array_format que Formata um número com milhares agrupados.
 * @var   $numerosFormatados  armazena a coleção de arrays a ser exibidos em cada Posição
 */

(array)$numeros = [1500.5, 42.333, 10000];

// Aplica o number_format com 2 casas decimais, vírgula e ponto
$numerosFormatados = array_map(function($valor) {
    return number_format($valor, 2, ',', '.');
     

}, (array)$numeros);

 print_r(json_encode($numerosFormatados));


/* Resultado:
Array (
    [0] => 1.500,50
    [1] => 42,33
    [2] => 10.000,00
) */

?>