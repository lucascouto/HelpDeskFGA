<?php
    class Solicitante{

        private $nomeCompleto;
        private $email;
        private $matricula;
        private $nomeUsuario;
        private $vinculoUnb;
        private $senha;

        public function __construct($nomeCompleto, $email, $matricula, $nomeUsuario, $vinculoUnb, $senha){
                $this->nomeCompleto = $nomeCompleto;
                $this->email = $email;
                $this->matricula = $matricula;
                $this->nomeUsuario = $nomeUsuario;   
                $this->vinculoUnb = $vinculoUnb;   
                $this->senha = senha;
        }
        
        public function __getNomeCompleto( ){
                return $this->nomeCompleto;
        }
        public function __setNomeCompleto ($nomeCompleto){
                $this->nomeCompleto = $nomeCompleto;
        }
        
        public function __getEmail( ){
                return $this->email;
        }
        
        public function __setEmail ($email){
                $this->email = $email;
        }

        public function __getMatricula( ){
                return $this->matricula;
        }
        public function __setMatricula ($matricula){
                $this->matricula = $matricula;
        }

        public function __getNomeUsuario( ){
                return $this->nomeUsuario;
        }
        
        public function __setNomeUsuario ($nomeUsuario){
                $this->nomeUsuario = $nomeUsuario;
        }
        
        public function __getVinculoUnb( ){
                return $this->vinculoUnb;
        }
        
        public function __setVinculoUnb ($vinculoUnb){
                $this->vinculoUnb = $vinculoUnb;
        }
        
        public function __getSenha( ) {
                return $this->senha;
        }
        
        public function __setSenha($senha) {
            $this->senha = $senha;
        }
}
