<?php
//Arquivo responsavel pela inicialização do sistema

// Busca a partir da pasta atual do script de forma segura:
require_once __DIR__ . '/sistema/configuracao.php';
include_once __DIR__ . '/sistema/helpers.php';


if(var_dump(validarEmail('teste'))):
    echo ucfirst('Endereço de Email Valido');
else:
    echo "Email invalido e incorreto";
    
endif;


?>