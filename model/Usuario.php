<?php

    class Usuario{
        
        private $nome;
        private $username;
        private $senha;
        private $matricula;
        
        function __construct($nome, $username, $senha, $matricula) {
            $this->nome = $nome;
            $this->username = $username;
            $this->senha = $senha;
            $this->matricula = $matricula;
        }
        
        function getNome() {
            return $this->nome;
        }

        function getUsername() {
            return $this->username;
        }

        function getSenha() {
            return $this->senha;
        }

        function getMatricula() {
            return $this->matricula;
        }

        function setNome($nome) {
            $this->nome = $nome;
        }

        function setUsername($username) {
            $this->username = $username;
        }

        function setSenha($senha) {
            $this->senha = $senha;
        }

        function setMatricula($matricula) {
            $this->matricula = $matricula;
        }



    }
    

