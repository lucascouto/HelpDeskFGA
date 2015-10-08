<?php
class Patrimonio{
        private $nome;
        private $codigo;
        private $marca;
        private $tipo;
        
        public function __construct( ){

        }
        
        public function __constructOverload( $nome,$codigo,$marca,$tipo ){
                $this->nome = $nome;
                $this->codigo = $codigo;
                $this->marca  = $marca;
                $this->tipo = $tipo;
        }

        public function __setNome ($nome){
                $this->nome = $nome;
        }

        public function __getNome( ){
                return $this->nome;
        }
        
        public function __setCodigo ($codigo){
                $this->codigo = $codigo;
        }

        public function __getCodigo( ){
                return $this->codigo;
        }
        
        public function __setMarca ($marca){
                $this->marca = $marca;
        }

        public function __getMarca( ){
                return $this->marca;
        }
        
        public function __setTipo ($tipo){
                $this->tipo = $tipo;
        }

        public function __getTipo( ){
                return $this->tipo;
        }
    }