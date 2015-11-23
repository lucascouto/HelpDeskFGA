<?php

    class Usuario{
        
        private $nome;
        private $username;
        private $email;
        private $senha;
        private $matricula;
        
        function __construct($nome, $email, $matricula, $username, $senha) {
            $this->nome = $nome;
            $this->username = $username;
            $this->email = $email;
            $this->senha = $senha;
            $this->matricula = $matricula;
        }
                
        public function getNome() {
            return $this->nome;
        }

        public function getUsername() {
            return $this->username;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getSenha() {
            return $this->senha;
        }

        public function getMatricula() {
            return $this->matricula;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setUsername($username) {
            $this->username = $username;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function setSenha($senha) {
            $this->senha = $senha;
        }

        public function setMatricula($matricula) {
            $this->matricula = $matricula;
        }



        
    }
    

