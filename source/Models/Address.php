<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Address extends DataLayer
{
    public function __construct()
    {
        parent::__construct("pessoa",["id","nome"], false);
    }

    public function add(pessoa $pessoa, string $nome, int $id): Address
    {
        $this->user_id = $pessoa->id;
        $this->nome = $nome;
        $this->number= $id;

        return $this;
    }
}

