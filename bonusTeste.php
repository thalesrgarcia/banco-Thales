<?php

require_once 'autoload.php';

use Thales\Banco\Service\ControladorDeBonificacoes;
use Thales\Banco\Modelo\{CPF, Pessoa};
use Thales\Banco\Modelo\CargoFuncionario\{Funcionario, Diretor, Gerente, Programador, Atendente, Limpeza};

$Funcionario1 = new Programador('Thales Garcia ', new CPF('123.456.789-10'), 'Programador', 2000 );

$Funcionario2 = new Gerente('Bruna Garcia', new CPF('123.456.789-12'), 'Gerente',3000 );

$Funcionario3 = new Diretor('Bruna Carrijo', new CPF('123.951.789-11'), 'Diretor', 5000 );

$Funcionario4 = new Atendente('Rayza Soares', new CPF('123.951.789-44'), 'Atendente', 1.500 );

$Funcionario5 = new Limpeza('Renan Angelo', new CPF('123.951.789-88'), 'Limpeza', 1.200 );

echo $Funcionario1->recuperaNome() . PHP_EOL;
echo $Funcionario1->recuperaCpf() . PHP_EOL;
echo $Funcionario1->recuperaCargo() . PHP_EOL;
echo $Funcionario1->recuperaSalario() . PHP_EOL . PHP_EOL;

$Funcionario1->sobeDeNivel();

echo $Funcionario1->recuperaNome() . PHP_EOL;
echo $Funcionario1->recuperaCpf() . PHP_EOL;
echo $Funcionario1->recuperaCargo() . PHP_EOL;
echo $Funcionario1->recuperaSalario() . PHP_EOL . PHP_EOL;

echo $Funcionario2->recuperaNome() . PHP_EOL;
echo $Funcionario2->recuperaCpf() . PHP_EOL;
echo $Funcionario2->recuperaCargo() . PHP_EOL;
echo $Funcionario2->recuperaSalario() . PHP_EOL . PHP_EOL;

echo $Funcionario3->recuperaNome() . PHP_EOL;
echo $Funcionario3->recuperaCpf() . PHP_EOL;
echo $Funcionario3->recuperaCargo() . PHP_EOL;
echo $Funcionario3->recuperaSalario() . PHP_EOL . PHP_EOL;

echo $Funcionario4->recuperaNome() . PHP_EOL;
echo $Funcionario4->recuperaCpf() . PHP_EOL;
echo $Funcionario4->recuperaCargo() . PHP_EOL;
echo $Funcionario4->recuperaSalario() . PHP_EOL . PHP_EOL;

echo $Funcionario5->recuperaNome() . PHP_EOL;
echo $Funcionario5->recuperaCpf() . PHP_EOL;
echo $Funcionario5->recuperaCargo() . PHP_EOL;
echo $Funcionario5->recuperaSalario() . PHP_EOL . PHP_EOL;

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($Funcionario1);
$controlador->adicionaBonificacaoDe($Funcionario2);
$controlador->adicionaBonificacaoDe($Funcionario3);
$controlador->adicionaBonificacaoDe($Funcionario4);
$controlador->adicionaBonificacaoDe($Funcionario5);

echo $controlador->recuperaTotal();
