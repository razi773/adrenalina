<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  
  <title> ADRENALINA </title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="produit.css">
  
</head>

<body align=center>
<nav>
    <h1>Adrelanine</h1>
    <div class="onglets">
        
        <a href="produit.php">Nos produits</a>
        <a href="#contact">Contact</a>
        <a href="Ajoutercliennt.php">Panier</a>
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
        <form action="pdf1.php" method="POST">
            <label for ="id:"><p style="color:black">age:</p>
        </label>
        <input type="number" name="id" value="<?php echo $_POST['id']; ?>" >
    </br>
    <br>
          <label for ="prenom:" back><p style="color:black">prenom:</p>
        </label>
        <input type="text" name="prenom" value="<?php echo $_POST['prenom']; ?>">
    </br>
    <br>
          <label for ="RIB:"><p style="color:black">RIB:</p>
        </label>
        <input type="number" name="RIB"  value="<?php echo $_POST['RIB']; ?>" >
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
