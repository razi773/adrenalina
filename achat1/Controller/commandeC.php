<?php

    require_once '../config.php';
    require_once '../model/commande.php';


    Class commandeC {

        function affichercommande()
        {
            $requete = "select * from commande";
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

        function CgetformationbyID($id)
        {
            $requete = "select * from formation where id=:id";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'id'=>$id
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        //triii
        function affichertri()
        {
            $requete = "select * from commande ORDER BY ID_Commande";
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
        function recherchecommande($ID_OFFRE)
        {
            $requete = "select * from commande where ID_OFFRE like '%$ID_OFFRE%'";
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

        function getcommandebyID($ID_Commande)
        {
            $requete = "select * from commande where ID_Commande=:ID_Commande";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'ID_Commande'=>$ID_Commande
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function ajoutercommande($commande)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO commande
                (ID_Commande,ID_OFFRE,ID_CLIENT )
                VALUES
                (:ID_Commande,:ID_OFFRE,:ID_CLIENT)
                ');
                $querry->execute([
                    'ID_Commande'=>$commande->getID_Commande(),
                    'ID_OFFRE'=>$commande->getID_OFFRE(),
                    'ID_CLIENT'=>$commande->getID_CLIENT()
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifiercommande($commande)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE commande SET
                ID_OFFRE=:ID_OFFRE,ID_CLIENT=:ID_CLIENT

                where ID_Commande=:ID_Commande
                ');
                $querry->execute([
                    'ID_Commande'=>$commande->getID_Commande(),
                    'ID_OFFRE'=>$commande->getID_OFFRE(),
                    'ID_CLIENT'=>$commande->getID_CLIENT()
                  
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function supprimercommande($ID_Commande)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM commande WHERE ID_Commande=:ID_Commande
                ');
                $querry->execute([
                    'ID_Commande'=>$ID_Commande
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function recupererCoupon($coupon){
            $sql="SELECT * from remis where coupon='".$coupon."'";
            $db = config::getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();
    
                $Voiture=$query->fetch();
                return $Voiture;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
    }
