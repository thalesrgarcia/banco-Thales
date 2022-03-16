<?php

require_once 'autoload.php';

use Thales\Banco\Modelo\{Endereco, CPF, AcessarMetodos, AcessarMetodos2};
use Thales\Banco\Modelo\ModeloConta\{Conta,Titular, ContaCorrente, ContaPoupanca};


$endereco1 = new Endereco('Francisco Bivar', '3,  Lote 2, 7D ', 'Praia da Rocha', ' Portimao-Portugal');
echo $endereco1 . PHP_EOL;
echo $endereco1->rua . PHP_EOL;


$thales = new Titular(new CPF('123.456.789-10'), 'Thales Garcia', $endereco1);
$primeiraConta = new ContaCorrente($thales);
$primeiraConta->deposita(5000);

//Este exemplo é para testar se a entrada de valor seria negativa
//sendo negativa ele faz o tratamento usando trycatch
//try{
//$primeiraConta->deposita(5000);
//}catch (InvalidArgumentException $exception) {
//    echo "Valor a depositar precisa ser positivo, seu ráquer perigoso";
//}

try {
    $primeiraConta->saca(200);
} catch (\Thales\Banco\Modelo\ModeloConta\SaldoInsuficienteException $exception) {
    echo "Você não tem saldo para realizar este saque." . PHP_EOL;
    echo $exception->getMessage();
}

echo $primeiraConta->nome . PHP_EOL;

echo $primeiraConta->recuperaSaldo() . PHP_EOL;

echo $primeiraConta->recuperaNome() . PHP_EOL;
echo $primeiraConta->recuperaCpf() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL . PHP_EOL;

$bruna = new Titular(new CPF('123.456.789-11'), 'Bruna Garcia', $endereco1);
$segundaConta = new ContaCorrente($bruna);
$segundaConta->deposita(1000);
//var_dump($segundaConta);
echo $segundaConta->recuperaNome() . PHP_EOL;
echo $segundaConta->recuperaCpf() . PHP_EOL;
echo $segundaConta->recuperaSaldo() . PHP_EOL . PHP_EOL;

$endereco2 = new Endereco('Renan Angelo', 'VilaRosa', 'Giacomino Ferrari 5', 'Lote C, 3B');
$terceiraConta = new ContaPoupanca(new Titular(new CPF('123.456.789-22'), 'Renan Angelo', $endereco2));
$terceiraConta->deposita(2000);
//unset($segundaConta);
echo $terceiraConta->recuperaNome() . PHP_EOL;
echo $terceiraConta->recuperaCpf() . PHP_EOL;
echo $terceiraConta->recuperaSaldo() . PHP_EOL . PHP_EOL;

$primeiraConta->transfere(500, $segundaConta);

echo $primeiraConta->recuperaNome() . PHP_EOL;
echo $primeiraConta->recuperaCpf() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL . PHP_EOL;

echo $segundaConta->recuperaNome() . PHP_EOL;
echo $segundaConta->recuperaCpf() . PHP_EOL;
echo $segundaConta->recuperaSaldo() . PHP_EOL . PHP_EOL;

echo Conta::recuperaNumeroDeContas() . PHP_EOL;
