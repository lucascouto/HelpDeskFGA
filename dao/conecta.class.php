<?php
    class ConexaoBD {
        public function conectar() {
            try{
                $conn = new PDO('mysql:host=localhost; dbname=helpdesk', 'root', '');
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
            return $conn;
        }
    }
?>
