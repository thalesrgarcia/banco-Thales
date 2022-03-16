<?php

namespace Thales\Banco\Modelo;

final class Endereco
{

    use AcessarMetodos; 

    private $rua;
    private $numero;
    private $bairro;
    private $cidade;

    public function __construct(string $rua, string $numero, string $bairro, string $cidade)
    {
        $this->rua = $rua;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cidade = $cidade; 
    }

    public function verCidade(): string
    {
        return $this->cidade;
    }

    public function verBairro(): string
    {
        return $this->bairro;
    }

    public function verRua(): string
    {
        return $this->rua;
    }

    public function verNumero(): string
    {
        return $this->numero;
    }

    public function __toString():string
    {
      return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";  
    }
}
