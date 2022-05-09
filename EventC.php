<?php

    require_once '../Assets/Utils/config.php';
    require_once '../Model/Event.php';


    Class EventC {

        function afficherEvent()
        {
            $requete = "select * from Event";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function triEvent()
        {
            $requete = "select * from Event ORDER BY nbr_p";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function recherche($ch)
        {
            $requete = "select * from Event where Nom like '%$ch%'";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
       
        function getEventbyID($NumEvent)
        {
            $requete = "select * from Event where NumEvent=:NumEvent";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'NumEvent'=>$NumEvent
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function ajouterEvent($Event)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO Event
                (NumEvent,Nom,Date,Description,Image,nbr_p)
                VALUES
                (:NumEvent,:Nom,:Date,:Description,Image,nbr_p');
                $querry->execute([
                    'NumEvent' => $Event->getNumEvent(),
					'Nom' => $Event->getNom(),
                    'Date' => $Event->getDate(),
					'Description' => $Event->getDescription(),
					'Image'=>$Event->getImage(),
                    'nbr_p'=>$Event->getnbr_p()
                    
				]);
            } catch (PDOException $th) {
                 $th->getMessage();
                
            }
        }
        function modifierEvent($Event)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                    UPDATE Event SET
                    Nom= :Nom, 
                    Date= :Date
					Description= :Description
                    Image= :Image
						
					WHERE NumEvent= :NumEvent
                    ');
                $querry->execute([
                    'NumEvent' => $NumEvent->getNumEvent(),
					'Nom' => $Event->getNom(),
                    'Date' => $Event->getDate(),
					'Description' => $Event->getDescriprtion(),
					'Image'=>$Event->getImage()
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function incparticipants($NumEvent,$nbr_p)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE Event SET
                nbr_p=:nbr_p

                where NumEvent=:NumEvent
                ');
                $querry->execute([
                    'NumEvent'=>$NumEvent,
                    'nbr_p' => $nbr_p

                  
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function commandeBAS()
	{
		$sql="SELECT count(*)as nbr_p FROM event where 	nbr_p<1;";
		$db = config::getConnexion();
		try
		{
			$liste=$db->query($sql);
			
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function commandeMOY()
	{
		$sql="SELECT count(*)as nbr_p FROM event where 	nbr_p>=1 AND nbr_p<5; ";
		$db = config::getConnexion();
		try
		{
			$liste=$db->query($sql);
			
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function commandeHAUT()
	{
		$sql="SELECT count(*)as nbr_p FROM event where 	nbr_p>=5 ";
		$db = config::getConnexion();
		try
		{
			$liste=$db->query($sql);
			
			return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

        function supprimerEvent($NumEvent)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM Event WHERE NumEvent =:NumEvent
                ');
                $querry->execute([
                    'NumEvent'=>$NumEvent
                ]);
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
       
        function getNom($Nom) {
            $config = config::getConnexion();
            try {
                $query = $config->prepare('
                select * FROM Event WHERE nom like ?
                ');
                $query->execute(array("$Nom%"));
                
                $result = $query->fetchAll();
                return $result;
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function getidcategorie($idcategorie) {
                    $config = config::getConnexion();
                    try {
                        $query = $config->prepare('
                        select * FROM Event WHERE idcategorie like ?
                        ');
                        $query->execute(array("$idcategorie%"));
                        
                        $result = $query->fetchAll();
                        return $result;
                        
                    } catch (PDOException $th) {
                         $th->getMessage();
                    }
                }
        function getEvent($NumEvent){
                    $requete="select * from Event where NumEvent=:NumEvent   ";
                    $config= config::getConnexion();
                    try{
                    $query=$config->prepare($requete);
                    $query->execute(
                [ 
                    'NumEvent'=>$NumEvent,
                    
                ]);
                    $result=$query->fetchAll();
                    return $result;
                    }catch (PDOException $e)
                    {$e->getMesssage();}
                }     

               
        
    }
