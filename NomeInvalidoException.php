<?php

namespace Thales\Banco\Modelo\ModeloConta;

class NomeInvalidoException extends \DomainException
{
    public function __construct(string $nomeTitular)
    {
        $mensagem = "Nome Invalido, por favor insira o Nome Completo !";
        parent::__construct($mensagem);
    }
}