<?php
    class commande
    {
        private $ID_Commande;
		public $ID_OFFRE;
		public $ID_CLIENT;

    

        function __construct($ID_Commande, $ID_OFFRE , $ID_CLIENT){
			$this->ID_Commande=$ID_Commande;
			$this->ID_OFFRE=$ID_OFFRE;
			$this->ID_CLIENT=$ID_CLIENT;
		}

        function setID_Commande(string $ID_Commande){
			$this->ID_Commande=$ID_Commande;
		}
       
		function setID_OFFRE(string $ID_OFFRE){
			$this->ID_OFFRE=$ID_OFFRE;
        }
		function setID_CLIENT(string $ID_CLIENT){
			$this->ID_CLIENT=$ID_CLIENT;
        }
		
		function getID_Commande(){
			return $this->ID_Commande;
		}
        function getID_OFFRE(){
			return $this->ID_OFFRE;
		}
        function getID_CLIENT(){
			return $this->ID_CLIENT;

		
		}
		
			
    }
    

?>