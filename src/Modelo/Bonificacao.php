<?php

    namespace Alura\Banco\Modelo;
    
    interface Bonificacao
    {
        public function bonificacao(float $taxaBonus): float;
    }