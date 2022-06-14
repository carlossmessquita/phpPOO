<?php
    namespace Alura\Banco\Modelo\Conta;

    
    class Conta
    {
        private Titular $titular;
        private string $numeroConta;
        private float $saldo;
        

        public function __construct(Titular $titular, string $numeroConta)
        {
            $this -> titular = $titular;
            $this -> setNumeroConta($numeroConta);
            $this -> setSaldo(0.0);
        }
        

        public function getTitular(): string
        {
            return $this -> titular -> getNome();
        }

        public function setNumeroConta(string $numero): void
        {
            $this -> numeroConta = $numero;
        }

        public function getNumeroConta(): string
        {
            return $this -> numeroConta;
        }

        public function setSaldo(float $valor): void
        {
            $this -> saldo = $valor;
        }

        public function getSaldo(): float
        {
            return $this -> saldo;
        }

        public function deposito(float $valor): void
        {
            $novoSaldo = $valor + $this -> saldo;
            $this -> setSaldo($novoSaldo);
        }

    }