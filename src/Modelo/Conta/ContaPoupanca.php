<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;

    class ContaPoupanca extends Conta
    {

        public function __construct(Titular $titular, string $numeroConta)
        {
            parent::__construct($titular, $numeroConta);
            $this -> setTipo("Conta Corrente");

        }

        public function tarifaSaque(): float
        {
            return 0.1;
        }


    }