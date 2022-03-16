<?php

namespace Thales\Banco\Modelo\ModeloConta;

class SaldoInsuficienteException extends \DomainException
{
    public function __construct(float $valorSaque, float $saldo)
    {
        $mensagem = "Você tentou sacar $valorSaque, mas tem apenas $saldo em conta.";
        parent::__construct($mensagem);
    }
}