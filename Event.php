<?php
	class Event{
		private $NumEvent=null;
		private $nom=null;
		private $Description=null;
		private $Date=null;
		private $Image;
		private $nbr_p;
		
		private $password=null;
		function __construct($NumEvent, $nom, $Description, $Date, $Image,$nbr_p){
			$this->NumEvent=$NumEvent;
			$this->nom=$nom;
			$this->Description=$Description;
			$this->Date=$Date;
			$this->Image=$Image;
			$this->nbr_p=$nbr_p;
		}
		function getNumEvent(){
			return $this->NumEvent;
		}
		function getNom(){
			return $this->nom;
		}
		
		function getDescription(){
			return $this->Description;
		}
	
		function getDate(){
			return $this->Date;
		}
		function setNom(string $nom){
			$this->nom=$nom;
		}
		function getImage(){
			return $this->Image;
		}
		function getnbr_p(){
			return $this->nbr_p;
		}
		function setnbr_p(string $nbr_p){
			$this->nbr_p=$nbr_p;
        }
		
		function setDescription(string $Description){
			$this->Description=$Description;
		}

		function setDate(string $Date){
			$this->Date=$Date;
		}
		function setImage(string $Image){
			$this->Image=$Image;
        }
		
	}



?>