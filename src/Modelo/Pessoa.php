<?php

namespace Alura\Banco\Modelo;
    class Pessoa
    {
        protected string $nome;
        protected string $cpf;
        
      

        public function __construct(string $nome, string $cpf)
        {
            $this -> setCpf($cpf);
            $this -> setNome($nome);
          
        }

        protected function setNome(string $nome): void
        {
            $this -> nome = $nome;
        }

        public function getNome(): string
        {
            return $this -> nome;
        }

        protected function setCpf(string $cpf): void
        {
            $this -> cpf =  $cpf;
        }

        public function getCpf(): string
        {
            return $this -> cpf;
        }
    }