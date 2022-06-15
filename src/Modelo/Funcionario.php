<?php 

    namespace Alura\Banco\Modelo;
    
    class Funcionario extends Pessoa implements Bonificacao
    {
        private string $cargo;
        protected float $salario;
        
        public function __construct(string $nome, string $cpf, string $cargo)
        {
            parent::__construct($nome, $cpf);
            $this -> setCargo($cargo);
        }

        public function setCargo(string $cargo): void
        {
            $this -> cargo = $cargo;
        }

        public function getCargo(): string
        {
            return $this -> cargo;  
        }

        public function setSalario(float $valor): void 
        {
            $this -> salario = $valor;
        }

        public function getSalario(): float
        {
            return $this -> salario;
        }
        
        public function bonificacao(float $taxaBonus): float
        {
            $bonificacao = ($this -> salario * $taxaBonus);
            $novoSalario = ($this -> salario += $bonificacao);
            $this -> setSalario($novoSalario);
            return $bonificacao;
        }
    }