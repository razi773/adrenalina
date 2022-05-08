<?php

    include '../config.php';
    include '../Model/ticket.php';


    Class ticketC {

        function afficherticket()
        {
            $requete = "select * from ticket";
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
       
       
        function getticketbyID($IDticket)
        {
            $requete = "select * from ticket where IDticket=:IDticket";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute(
                    [
                        'IDticket'=>$IDticket
                    ]
                );
                $result = $querry->fetch();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function ajouterticket($ticket)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                INSERT INTO ticket
                (IDticket,types,prix)
                VALUES
                (:IDticket,:types,:prix)
                ');
                $querry->execute([
                    'IDticket'=>$ticket->getIDticket(),
                    'types'=>$ticket->gettypes(),
                    'prix'=>$ticket->getprix(),
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function modifierticket($ticket)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                UPDATE ticket SET
                IDticket= :IDticket,
                types= :types,
                prix= :prix               
                

                where IDticket=:IDticket
                ');
                $querry->execute([
                    'IDticket' => $ticket->getIDticket(),
                    'types' => $ticket->gettypes(),
                    'prix' => $ticket-> getprix()
                    
                    
                ]);
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        function supprimerticket($IDticket)
        {
            $config = config::getConnexion();
            try {
                $querry = $config->prepare('
                DELETE FROM ticket WHERE IDticket =:IDticket
                ');
                $querry->execute([
                    'IDticket'=>$IDticket
                ]);
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }

        //triii
        function affichertri()
        {
            $requete = "select * from ticket ORDER BY types";
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
        function rechercheticket($types)
        {
            $requete = "select * from ticket where types like '%$types%'";
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
       
       /* function getnum_carte($num_carte) {
            $config = config::getConnexion();
            try {
                $query = $config->prepare('
                select * FROM ticket WHERE num_carte like ?
                ');
                $query->execute(array("$num_carte%"));
                
                $result = $query->fetchAll();
                return $result;
                
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }*/
              /*  function getnbr_ticket($nbr_ticket) {
                    $config = config::getConnexion();
                    try {
                        $query = $config->prepare('
                        select * FROM ticket WHERE nbr_ticket like ?
                        ');
                        $query->execute(array("$nbr_ticket%"));
                        
                        $result = $query->fetchAll();
                        return $result;
                        
                    } catch (PDOException $th) {
                         $th->getMessage();
                    }
                }
                function getticket($prix_ticket){
                    $requete="select * from ticket where IDticket=:IDticket";
                    $config= config::getConnexion();
                    try{
                    $query=$config->prepare($requete);
                    $query->execute(
                [ 
                    'IDticket'=>$IDticket,
                    
                ]);
                    $result=$query->fetchAll();
                    return $result;
                    }catch (PDOException $e)
                    {$e->getMesssage();}
                }     

               */
        
    }
