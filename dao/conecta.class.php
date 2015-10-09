<?php
    class ConexaoBD {
        
        private $conn;
        
        public function conectar() {
            try{
                $this->conn = new PDO('mysql:host=localhost; dbname=helpdesk', 'root', '');
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
            return $this->conn;
        }
        
        public function desconectar(){
            $this->conn = null;
        }
    }
