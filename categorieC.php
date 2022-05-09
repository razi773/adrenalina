<?php

    require_once '../Assets/Utils/config.php';
    require_once '../Model/categorie.php';


    Class categorieC {

        function affichercategorie()
        {
            $requete = "select * from categorie";
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
        function triParnbreEvent()
        {
            $requete = "select * from categorie ORDER BY nbreEvent";
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
        function getcategoriebyID($id)
        {
            $requete = "select * from categorie where idcategorie=:id";
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

        function ajoutercategorie($categorie)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO categorie
                (idcategorie,nomcategorie,nbreEvent)
                VALUES
                (:idcategorie,:nomcategorie,:nbreEvent)
                ');
                $querry->execute([
                    'idcategorie'=>$categorie->getidcategorie(),
                    'nomcategorie'=>$categorie->getnomcategorie(),
                    'nbreEvent'=>$categorie->getnbreEvent(),
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifiercategorie($categorie)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE categorie SET
                nomcategorie=:nomcategorie,nbreEvent=:nbreEvent

                where idcategorie=:idcategorie
                ');
                $querry->execute([
                    'idcategorie'=>$categorie->getidcategorie(),
                    'nomcategorie'=>$categorie->getnomcategorie(),
                    'nbreEvent'=>$categorie->getnbreEvent(),
                  
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function supprimercategorie($id)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM categorie WHERE idcategorie =:id
                ');
                $querry->execute([
                    'id'=>$id
                ]);
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function affichercategoriebyEvent($idcategorie)
        {
            $requete = "select * from Event where idcategorie=$idcategorie";
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
function getcategorie($idcategorie){
    $requete="select * from Event where idcategorie=:id   ";
    $config= config::getConnexion();
    try{
    $query=$config->prepare($requete);
    $query->execute(
[ 
    'id'=>$idcategorie,
    
]);
    $result=$query->fetchAll();
    return $result;
    }catch (PDOException $e)
    {$e->getMesssage();}
}   
        
    }
