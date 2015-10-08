<!DOCTYPE html>
<head>
</head>

<body>
    <?php
        class Chamado
        /* 
         * To change this license header, choose License Headers in Project Properties.
         * To change this template file, choose Tools | Templates
         * and open the template in the editor.
         */

        private $descricao;
        private $local;
        private $tecnico;
        private $patrimonio;
        
        public function __construct( ){
            
        }

        public function __constructOverload( $local,$tecnico,$patrimonio,$descricao){
	
		this->$descricao = $descricao;
                this->$local = $local;
                this->$tecnico = $tecnico;
                this->$patrimonio = $patrimonio;       
	}
        
        public function __setDescricao ($descricao){
		this->$descricao = $descricao;
	}
	
	public function __getDescricao( ){
		return this->$descricao;
	}
        
?></body>