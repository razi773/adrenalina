<?php
    require '../controller/typeC.php';

    $typeC = new typeC();
    $typeC->supprimertype($_GET['id']);
    header('Location:affichertype.php');
?>