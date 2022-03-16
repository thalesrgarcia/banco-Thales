<?php 

namespace Thales\Banco\Modelo;

trait AcessarMetodos 
{
	public function __get(string $nomeAtributo):string
    {
        $metodo = 'ver'.ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}