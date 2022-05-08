<?php

    require_once '../config.php';
    require_once '../Model/type.php';


    Class typeC {


       
        
        function affichertype()
        {
            $requete = "select * from type";
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
       
        function gettypebyID($id)
        {
            $requete = "select * from type where id_type=:id";
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

        /*function ajoutertype($type)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO type
                (id_type,nom_type,quantite_T)
                VALUES
                (:id_type,:nom_type,:quantite_T');
                $querry->execute([
                    'id_type'=>$type->getid_type(),
                    'nom_type'=>$type->getnom_type(),
                    'quantite_T'=>$type->getquantite_T(),
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }*/
        function ajoutertype($type ){
            $sql="INSERT INTO type (id_type,nom_type,quantite_T ) 
            VALUES (:id_type, :nom_type, :quantite_T )";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);
                $query->execute([
                    'id_type'=>$type->getid_type(),
                    'nom_type'=>$type->getnom_type(),
                    'quantite_T'=>$type->getquantite_T(),
                    
                ]);			
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }			
        }
       
        
    
        function modifiertype($type)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE type SET
                nom_type=:nom_type,quantite_T=:quantite_T

                where id_type=:id_type
                ');
                $querry->execute([
                    'id_type'=>$type->getid_type(),
                    'nom_type'=>$type->getnom_type(),
                    'quantite_T'=>$type->getquantite_T(),
                  
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function supprimertype($id)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM type WHERE id_type =:id
                ');
                $querry->execute([
                    'id'=>$id
                ]);
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function affichertypebyproduit($id_type)
        {
            $requete = "select * from article where id_type=$id_type";
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
  
     /**
 * Get sticky posts for home page
 */
function gettype($idtype){
    $requete="select * from article where id_type=:id   ";
    $config= config::getConnexion();
    try{
    $query=$config->prepare($requete);
    $query->execute(
[ 
    'id'=>$idtype,
    
]);
    $result=$query->fetchAll();
    return $result;
    }catch (PDOException $e)
    {$e->getMesssage();}
}   
        
    }
