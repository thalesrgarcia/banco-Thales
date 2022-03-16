<?php

namespace Thales\Banco\Service;

use Thales\Banco\Modelo\Autenticavel;
use Thales\Banco\Modelo\CargoFuncionario\{Gerente, Diretor};
use Thales\Banco\Modelo\ModeloConta\Titular;


class Autentificador 
{
	public function efetuarLogin(Autenticavel $Autenticavel, string $senha)
	{
		if ($diretor->podeAutenticar($senha)) {
			echo "Ok. usuario Logado com sucesso !";
		} else {
			echo "SENHA INCORRETA !";
		}
	}
}