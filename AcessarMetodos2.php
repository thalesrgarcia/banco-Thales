<?php 

namespace Thales\Banco\Modelo;

trait AcessarMetodos2 
{
	public function __get(string $nomeAtributo):string
    {
        $metodo = 'recupera'.ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}