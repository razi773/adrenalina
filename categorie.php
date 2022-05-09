<?php
    class categorie
    {
        private $idcategorie;
        public $nomcategorie;
        public $nbreEvent;
    

        function __construct($idcategorie, $nomcategorie, $nbreEvent){
			$this->idcategorie=$idcategorie;
			$this->nomcategorie=$nomcategorie;

			$this->nbreEvent=$nbreEvent;
		}

        function setidcategorie(string $idcategorie){
			$this->idcategorie=$idcategorie;
		}
        function setnomcategorie(string $nomcategorie){
			$this->nomcategorie=$nomcategorie;
		}
        function setnbreEvent(string $nbreEvent){
			$this->nbreEvent=$nbreEvent;
        }

        function getidcategorie(){
			return $this->idcategorie;
		}
        function getnomcategorie(){
			return $this->nomcategorie;
		}
        function getnbreEvent(){
			return $this->nbreEvent;
		}
        
    }
    

?>