<?php
    class Chamado{

        private $descricao;
        private $local;
        private $tecnico;
        private $patrimonio;

        public function __construct( ){

        }

        public function __constructOverload( $local,$tecnico,$patrimonio,$descricao){
                $this->descricao = $descricao;
                $this->local = $local;
                $this->tecnico = $tecnico;
                $this->patrimonio = $patrimonio;       
        }

        public function __setDescricao ($descricao){
                $this->$descricao = $descricao;
        }

        public function __getDescricao( ){
                return $this->descricao;
        }
        public function __setLocal ($local){
                $this->local = $local;
        }

        public function __getLocal( ){
                return $this->local;
        }
        
        public function __setTecnico ($tecnico){
                $this->tecnico = $tecnico;
        }

        public function __getTecnico( ){
                return $this->tecnico;
        }
        
        public function __setPatrimonio ($patrimonio){
                $this->patrimonio = $patrimonio;
        }

        public function __getPatrimonio( ){
                return $this->patrimonio;
        }
    }
