<?php
    class article
    {
        private $id;
        public $titre;
		private $description;
		private $img;
		private $auteur;
        public $date;
    

        function __construct($id, $titre, $description, $img, $auteur, $date){
			$this->id=$id;
			$this->titre=$titre;
			$this->description=$description;
			$this->img=$img;
			$this->auteur=$auteur;
			$this->date=$date;
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
		function setimg(string $img){
			$this->img=$img;
        }
		function setauteur(string $auteur){
			$this->auteur=$auteur;
		}
		function setdate(string $date){
			$this->date=$date;
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
		function getimg(){
			return $this->img;
		}
		function getauteur(){
			return $this->auteur;
		}
        function getdate(){
			return $this->date;
		}
        
    }
	
        
 
	
    

?>