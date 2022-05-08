<?php
    require '../controller/ticketC.php';

    $ticketC= new ticketC();
    $ticketC->supprimerticket($_GET['IDticket']);
    header('Location:afficherpanier.php');
?>