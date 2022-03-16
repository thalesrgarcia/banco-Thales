<?php

namespace Thales\Banco\Modelo\CargoFuncionario;

use Thales\Banco\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return 1000;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '4321';
    }
}
