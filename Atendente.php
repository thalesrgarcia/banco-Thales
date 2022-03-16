<?php

namespace Thales\Banco\Modelo\CargoFuncionario;

class Atendente extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return 500;
    }
}
