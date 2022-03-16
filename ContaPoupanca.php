<?php

namespace Thales\Banco\Modelo\ModeloConta;

class ContaPoupanca extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.03;
    }
}
