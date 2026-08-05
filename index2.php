<?php
//Arquivo responsavel pela inicialização do sistema

// Busca a partir da pasta atual do script de forma segura:
require_once __DIR__ . '/sistema/configuracao.php';
include_once __DIR__ . '/sistema/helpers.php';


echo contarTempo();
?>