<?php
    include '../config.php';



    Class clienntC {

        function affichercliennt()
        {
            $requete = "select * from cliennt";
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
       
       
        function getclienntbyID($id)
        {
            $requete = "select * from cliennt where id=:id";
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

        function ajoutercliennt($cliennt)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO cliennt
                (id,nom,prenom,Adresse,Num,types,RIB)
                VALUES
                (:id,:nom,:prenom,:Adresse,:Num,:types,:RIB)
                ');
                $querry->execute([
                    'id'=>$cliennt->getid(),
                    'nom'=>$cliennt->getnom(),
                    'prenom'=>$cliennt->getprenom(),
                    'Adresse'=>$cliennt->getAdresse(),
                    'Num'=>$cliennt->getNum(),
                    'types'=>$cliennt->gettypes(),
                    'RIB'=>$cliennt->getRIB(),
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifiercliennt($cliennt)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE cliennt SET
                id= :id,
                nom= :nom,
                prenom= :prenom,
                Adresse= :Adresse,
                Num= :Num,
                types= :types,
                RIB= :RIB

                where id=:id
                ');
                $querry->execute([
                    'id'=>$cliennt->getid(),
                    'nom'=>$cliennt->getnom(),
                    'prenom'=>$cliennt->getprenom(),
                    'Adresse'=>$cliennt->getAdresse(),
                    'Num'=>$cliennt->getNum(),
                    'types'=>$cliennt->gettypes(),

                    'RIB'=>$cliennt->getRIB(),
                    
                    
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function supprimercliennt($id)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM cliennt WHERE id =:id
                ');
                $querry->execute([
                    'id'=>$id
                ]);
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function clienntBAS()
        {
            $sql="SELECT count(*)as nbr FROM `cliennt` where 	types<4;";
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
        function clienntMOY()
        {
            $sql="SELECT count(*)as nbr FROM `cliennt` where 	types>=1 AND types<4; ";
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
        function clienntHAUT()
        {
            $sql="SELECT count(*)as nbr FROM `cliennt` where 	types>=3 ";
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
    
       
       /* function getnum_carte($num_carte) {
            $config = config::getConnexion();
            try {
                $query = $config->prepare('
                select * FROM cliennt WHERE num_carte like ?
                ');
                $query->execute(array("$num_carte%"));
                
                $result = $query->fetchAll();
                return $result;
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }*/
              /*  function getnbr_cliennt($nbr_cliennt) {
                    $config = config::getConnexion();
                    try {
                        $query = $config->prepare('
                        select * FROM cliennt WHERE nbr_cliennt like ?
                        ');
                        $query->execute(array("$nbr_cliennt%"));
                        
                        $result = $query->fetchAll();
                        return $result;
                        
                    } catch (PDOException $th) {
                         $th->getMessage();
                    }
                }
                function getcliennt($prix_cliennt){
                    $requete="select * from cliennt where id=:id";
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

               */
        
    }
