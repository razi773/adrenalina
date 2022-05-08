<?php
    class ticket
    {
        private $IDticket;
        public $types;
	
        public $prix;
    

        function __construct($IDticket, $types, $prix){
			$this->IDticket=$IDticket;
			$this->types=$types;
			$this->prix=$prix;
		
		}

        function setIDticket(string $IDticket){
			$this->IDticket=$IDticket;
		}
        function settypes(string $types){
			$this->types=$types;
		}
		function setprix(string $prix){
			$this->prix=$prix;
        }
        function getIDticket(){
			return $this->IDticket;
		}
        function gettypes(){
			return $this->types;
		}
		function getprix(){
			return $this->prix;
		}

    }
    

?>