<?php
    class achat
    {
        private $ID_ACHAT;
        public $PRIX;
        public $TITRE;
		public $ID_COMMANDE;

    

        function __construct($ID_ACHAT, $TITRE, $PRIX, $ID_COMMANDE ){
			$this->ID_ACHAT=$ID_ACHAT;
			$this->TITRE=$TITRE;
			$this->PRIX=$PRIX;
			$this->ID_COMMANDE=$ID_COMMANDE;
		}

        function setID_ACHAT(string $ID_ACHAT){
			$this->ID_ACHAT=$ID_ACHAT;
		}
        function setTITRE(string $TITRE){
			$this->TITRE=$TITRE;
		}
        function setPRIX(string $PRIX){
			$this->PRIX=$PRIX;
        }
		function setID_COMMANDE(string $ID_COMMANDE){
			$this->ID_COMMANDE=$ID_COMMANDE;
        }
		
        function getID_ACHAT(){
			return $this->ID_ACHAT;
		}
        function getTITRE(){
			return $this->TITRE;
		}
        function getPRIX(){
			return $this->PRIX;

		}
        function getID_COMMANDE(){
			return $this->ID_COMMANDE;
		}
			
    }
    

?>