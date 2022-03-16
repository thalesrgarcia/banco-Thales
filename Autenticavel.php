<?php

namespace Thales\Banco\Modelo;

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}