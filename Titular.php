<?php

namespace Thales\Banco\Modelo\ModeloConta;

use Thales\Banco\Modelo\Pessoa;
use Thales\Banco\Modelo\CPF;
use Thales\Banco\Modelo\Endereco;
use Thales\Banco\Modelo\Autenticavel;

class Titular extends Pessoa implements Autenticavel
{
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

     public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }

}
