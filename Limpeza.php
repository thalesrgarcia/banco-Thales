<?php

namespace Thales\Banco\Modelo\CargoFuncionario;

class Limpeza extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return 250;
    }
}