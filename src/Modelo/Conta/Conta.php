<?php
    namespace Alura\Banco\Modelo\Conta;

    
    abstract class Conta
    {
        protected Titular $titular;
        protected string $numeroConta;
        protected string $tipoConta;
        protected float $saldo;
        

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

        protected function setNumeroConta(string $numero): void
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

        public function saque(float $valor): void
        {
    
            $valor += ($valor * $this -> tarifaSaque());

            if ($valor <= $this -> saldo)
            {
                $novoSaldo = $this -> saldo - $valor;
                $this -> setSaldo($novoSaldo);
            } else {
                echo "Saldo insuficiente!";
            }
        }

        protected function setTipo(string $tipo)
        {
            $this -> tipoConta = $tipo;
        }

        public function getTipo(): string
        {
            return $this -> tipoConta;
        }

        abstract function tarifaSaque(): float;

        

    }