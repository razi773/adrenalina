<?php
ob_start();


   

   
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  
  <title> ADRENALINA </title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="produits.css">
  
</head>

<body align=center>
<nav>
    <h1>Adrelanine</h1>
    <div class="onglets">
        
    <a href="#">Home</a>
        <a href="#produits"onclick=window.location.href='produitt.php'>Nos produits</a>
        <a href="#panier"onclick=window.location.href='panier.php'>panier</a>
        <a href="#types" onclick=window.location.href='afficherfronttype.php'>types</a>
            <a href="#Articles"  onclick=window.location.href='articlee.php'>article</a>
        <a href="#contact">Contact</a>
      
    </div>
</nav>

<header>
    <h1>ADRENALINA,</h1>
    <h4>Recu </h4>
    
</header>
  <?php

?>



        
          

       
    
    <div>
    <table align="center" class="art">
    <tr><br> <br></tr>
       <tr>
        
        <td>
        <form action="pdf.php" method="POST">
            <label for ="ID_ACHAT:"><p style="color:black">ID_ACHAT:</p>
        </label>
        <input type="number" name="ID_ACHAT" value="<?php echo $_POST['ID_ACHAT']; ?>" readonly>
    </br>
    <br>
          <label for ="TITRE:"><p style="color:black">TITRE:</p>
        </label>
        <input type="text" name="TITRE"  value="<?php echo $_POST['TITRE']; ?>" readonly>
    </br>
    <br>
          <label for ="prix Totale:" back><p style="color:black">PRIX TOTALE:</p>
        </label>
        <input type="number" name="PRIX" value="<?php echo $_POST['PRIX']; ?>" readonly>
    </br>
         
          
</div>
<br>
          </table>
<table align="center">
    <tr><br> <br></tr>
       <tr>
        
        <td> <input type="submit" class="btn btn-dark" value="Imprimer le recu en pdf">  </td>
       </form>
      </tr></table>
      <footer>

    
<h1>Nos services</h1>
<div class="services">
    
    <div class="service">
       
        <p>Découvrez nos services en ligne complets .</p>
    </div>
    <br>

    <div class="service">
        <h3>Paiement en ligne</h3>
        <p>Découvrez les méthodes faciles de Paiement en ligne ( paiment banquaire ).</p>
    </div>

    
</div>

<p id="contact">Contact : telephone: +216 70 000 111 | Facebook/Instagram:  ADRENALINA | Gmail: ADRENALINA.ESPRIT@gmail.com | &copy; 2021, ADRENALINA.</p>
</footer>
      <?php 
    ob_end_flush();
    ?>