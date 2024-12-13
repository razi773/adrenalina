<?php

    require_once '../Assets/Utils/config.php';
    require_once '../Model/commentaire.php';


    Class commentaireC {

        function affichercommentaire()
        {
            $requete = "select * from comments";
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
        
        function getcommentairebyID($id)
        {
            $requete = "select * from comments where id=:id";
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

        function ajoutercommentaire($commentaire)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO comments
                (id,id_article,commentaire,pseudo)
                VALUES
                (:id,:id_article,:commentaire,pseudo)
                ');
                $querry->execute([
                    'id'=>$commentaire->getid(),
                    'id_article'=>$commentaire->getid_article(),
                    'commentaire'=>$commentaire->getcommentaire(),
                    'pseudo'=>$commentaire->getpseudo(),
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifiercommentaire($commentaire)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE comments SET
                id_article=:id_article,commentaire=:commentaire,pseudo=:pseudo,

                where id=:id
                ');
                $querry->execute([
                    'id'=>$commentaire->getid(),
                    'id_article'=>$commentaire->getid_article(),
                    'commentaire'=>$commentaire->getcommentaire(),
                    'pseudo'=>$commentaire->getpseudo(),
                  
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function supprimercommentaire($id)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM comments WHERE id =:id
                ');
                $querry->execute([
                    'id'=>$id
                ]);
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
       
  
     /**
 * Get sticky posts for home page
 */
function getcomments($id){
    $requete="select * from article where id=:id   ";
    $config= config::getConnexion();
    try{
    $query=$config->prepare($requete);
    $query->execute(
[ 
    'id'=>$id,
    
]);
    $result=$query->fetchAll();
    return $result;
    }catch (PDOException $e)
    {$e->getMesssage();}
}   
        
    }
