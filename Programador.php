<?php

namespace Thales\Banco\Modelo\CargoFuncionario;

class Programador extends Funcionario
{
	public function calculaBonificacao(): float
    {
        return 1000;
    }

    public function sobeDeNivel()
    {
        $this->recebeAumento($this->recuperaSalario() * 0.75);
    }
}
