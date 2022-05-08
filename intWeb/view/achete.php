<?php
session_start();
if (isset($_GET['id_produit'])) {
    $ID_OFFRE=$_GET['id_produit'];
    $ID_COMMANDE=rand(1,10000);
    $ID_CLIENT=7;
    require_once '../Controller/commandeC.php';
    require_once '../Model/commande.php';
    $commande = new commande($ID_COMMANDE,$ID_OFFRE,$ID_CLIENT);
    $commandeC = new commandeC();
    $commandeC->ajoutercommande($commande);
    header('location:panier.php');
}
?>