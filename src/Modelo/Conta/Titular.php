<?php



namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Endereco;

    class Titular extends Pessoa
    {   
        private Endereco $endereco;

        public function __construct(string $nome, string $cpf, Endereco $endereco)
        {
            parent::__construct($nome, $cpf);
            $this -> setEndereco($endereco);
        }

        public function setEndereco(Endereco $endereco): void
        {
            $this -> endereco = $endereco;
        }

        public function getEndereco(): Endereco
        {
            return $this -> endereco;
        }

        public function enderecoTitular(): string
        {
            return $this -> endereco -> enderecoCompleto();
        }

    }