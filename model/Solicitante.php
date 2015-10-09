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
}
