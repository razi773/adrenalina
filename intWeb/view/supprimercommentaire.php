<?php
    require '../controller/commentaireC.php';

    $commentaireC = new commentaireC();
    $commentaireC->supprimercommentaire($_GET['id']);
    header('Location:affichercommentaire.php');
?>