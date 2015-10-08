<?php
    class Local{
        private $edificio;
        private $sala;
        
        public function __construct( ){

        }
        
        public function __constructOverload( $sala,$edificio){
                $this->edificio = $edificio;
                $this->sala = $sala;    
        }

        public function __setSala ($sala){
                $this->sala = $sala;
        }

        public function __getSala( ){
                return $this->sala;
        }
        
        public function __setEdificio ($edificio){
                $this->edificio = $edificio;
        }

        public function __getEdificio( ){
                return $this->edificio;
        }
    }