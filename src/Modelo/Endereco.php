<?php

namespace Alura\Banco\Modelo;
    class Endereco
    {
        private string $cidade;
        private string $bairro;
        private string $rua;
        private string $numero;

        public function __construct(string $cidade, string $bairro, string $rua, string $numero)
        {
            
        }

        public function setCidade(string $cidade): void
        {
            $this -> cidade = $cidade;
        }

        public function setBairro(string $bairro): void
        {
            $this -> bairro = $bairro;
        }

        public function setRua(string $rua): void
        {
            $this -> rua = $rua;
        }

        public function setNumero(string $numero): void
        {
            $this -> numero = $numero;
        }

        public function getCidade(): string
        {
            return $this -> cidade;
        }

        public function getBairro(): string
        {
            return $this -> bairro;
        }

        public function getRua(): string
        {
            return $this -> rua;
        }

        public function getNumero(): string
        {
            return $this -> numero;
        }

        public function enderecoCompleto(): string
        {
            $endereco = "{$this->getRua()}, {$this->getNumero()}, {$this->getBairro()}, {$this->getCidade()}";
            return $endereco;
        }
    }