<?php
include '../config.php';

class produitC{
    function afficherproduit(){
        $sql="SELECT * from produit";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:'.$e->getMessage());
            
        }
    }
    function produitBAS()
	{
		$sql="SELECT count(*)as nbr FROM `produit` where 	quantite<100;";
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
    function produitMOY()
	{
		$sql="SELECT count(*)as nbr FROM `produit` where 	quantite>=1 AND quantite<5; ";
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
    function produitHAUT()
	{
		$sql="SELECT count(*)as nbr FROM `produit` where 	quantite>=233 ";
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

    /*function recupererproduit($id_produit){
        $sql="SELECT * from produit where id_produit=$id_produit";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $produit=$query->fetch();
            return $produit;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    } */
    function getproduitbyID($id_produit)
        {
            $requete = "select * from produit where id_produit=:id_produit";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'id_produit'=>$id_produit
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }


    
    function modifierproduit($produit)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE produit SET
                nom= :nom, 
                prix= :prix, 
                id_produit= :id_produit, 
                quantite= :quantite,
                description1= :description1,
                id_type= :id_type
                
                where id_produit=:id_produit
                ');
                $querry->execute([
                    'nom' => $produit->getnom(),
                    'prix' => $produit-> getprix(),
                    'id_produit' => $produit->getid_produit(),
                    'quantite' => $produit->getquantite(),
                    'description1' => $produit->getdescription1(),
                    'id_type'=>$produit->getid_type(),
                   
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }



      /*  function modifierproduitImg($produit)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE produit SET
                nom= :nom, 
                prix= :prix, 
                id_produit= :id_produit, 
                quantite= :quantite,
                description1= :description1
                where id=:id
                ');
                $querry->execute([
                    


                    'nom' => $produit->getnom(),
                    'prix' => $produit-> getprix(),
                    'id_produit' => $produit->getid_produit(),
                    'quantite' => $produit->getquantite(),
                    'description1' => $produit->getdescription1(),
                   // 'Image1'=>$produit->getImage1(),
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }*/

           

    function supprimerproduit($id_produit){
        $sql="DELETE FROM produit WHERE id_produit=:id_produit";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_produit', $id_produit);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:'. $e->getMeesage());
        }
    }
//triii
/*function affichertri()
{
    $requete = "select * from produit ORDER BY prix";
    $config = config::getConnexion();
    try {
        $querry = $config->prepare($requete);
        $querry->execute();
        $result = $querry->fetchAll();
        return $result ;
    } catch (PDOException $th) {
         $th->getMessage();
    }
}*/
function triP()
        {
            $requete = "select * from produit ORDER BY prix";
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
function rechercheproduit($id_produit)
{
    $requete = "select * from produit where id_produit like '%$id_produit%'";
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
   function ajouterproduit($produit ){
        $sql="INSERT INTO produit (id_produit, nom, prix, quantite, description1,id_type) 
        VALUES (:id_produit,:nom,:prix,:quantite, :description1, :id_type )";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $query->execute([
                'id_produit' => $produit->getid_produit(),
                'nom' => $produit->getnom(),
                'prix' => $produit->getprix(),
                'quantite' => $produit->getquantite(),
                'description1' => $produit->getdescription1(),
                'id_type' => $produit->getid_type(),
                //'Image1' => $produit->getImage1()

                
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }
   
    }

?>