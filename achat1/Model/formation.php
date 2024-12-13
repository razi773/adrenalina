<?php
    class formation
    {
        private $id;
        public $titre;
        public $description;
		public $categorie;
		public $prix;
		public $vendeur;
		public $quantite;


    

        function __construct($id,$titre,$description,$categorie,$prix,$vendeur,$quantite)
		{
			$this->id=$id;
			$this->titre=$titre;
			$this->description=$description;
			$this->categorie=$categorie;
			$this->prix=$prix;
			$this->vendeur=$vendeur;
			$this->quantite=$quantite;

			
		}

        function setid(string $id){
			$this->id=$id;
		}
        function settitre(string $titre){
			$this->titre=$titre;
		}
        function setdescription(string $description){
			$this->description=$description;
        }
		function setcategorie(string $categorie){
			$this->categorie=$categorie;
        }
		function setprix(string $prix){
			$this->prix=$prix;
        }
		function setvendeur(string $vendeur){
			$this->vendeur=$vendeur;
        }
		function setquantite(string $quantite){
			$this->quantite=$quantite;
        }
		


        function getid(){
			return $this->id;
		}
        function gettitre(){
			return $this->titre;
		}
        function getdescription(){
			return $this->description;
		}
		function getcategorie(){
			return $this->categorie;
		}
		function getprix(){
			return $this->prix;
		}
		function getvendeur(){
			return $this->vendeur;
		}
		function getquantite(){
			return $this->quantite;
		}
        
    }
    

?>