<?php
    class type
    {
        private $id_type;
        public $nom_type;
        public $quantite_T;
		

        function __construct($id_type, $nom_type, $quantite_T){
			$this->id_type=$id_type;
			$this->nom_type=$nom_type;

			$this->quantite_T=$quantite_T;
		}

        function setid_type(string $id_type){
			$this->id_type=$id_type;
		}
        function setnom_type(string $nom_type){
			$this->nom_type=$nom_type;
		}
        function setquantite_T(string $quantite_T){
			$this->quantite_T=$quantite_T;
        }

        function getid_type(){
			return $this->id_type;
		}
        function getnom_type(){
			return $this->nom_type;
		}
        function getquantite_T(){
			return $this->quantite_T;
		}
        
    }
    

?>