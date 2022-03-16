<?php

use Thales\Banco\Modelo\CPF;
use Thales\Banco\Modelo\CargoFuncionario\Diretor;
use Thales\Banco\Service\Autentificador;
use Thales\Banco\Modelo\Autenticavel;

require_once 'autoload.php';

error_reporting(E_ALL);
$teste1 = new Autentificador();
var_dump($teste1);
$Funcionario3 = new Diretor('Bruna Carrijo', new CPF('123.951.789-11'), 'Diretor', 5000 );
var_dump($Funcionario3);
var_dump($senha);

$teste1->efetuarLogin($Funcionario3, '1234');
