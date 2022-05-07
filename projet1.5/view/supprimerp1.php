<?php
    require '../controller/produitC.php';

    $produitC = new produitC();
    $produitC->supprimerproduit($_GET['id_produit']);
    header('Location:afficherP1.php');
?>