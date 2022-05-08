<?php
    ob_start();
    
?>
<?php
require '../Controller/produitC.php';
//require '../Controller/participantC.php';


$formationC = new produitC();
   $formationS = $formationC->afficherproduit();
 //  $participantC = new participantC();
   $formationS = $formationC->afficherproduit();

?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    
    <title>Site parc d'attraction  - Frenchcoder</title>
    
    <link rel="stylesheet" href="produits.css">
</head>
<body>
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
    <h1>Adrelanine,</h1>
    <h4>LE MEILLEUR PARC D'ATTRACTION </h4>
   
</header>

<table align="center">
        <tr>    <td> 
        <form action="recu.php" method="POST" >
          <input name="ID_ACHAT" value="<?php echo rand(1,10000);?>" hidden>
          <input name="TITRE" value="<?php echo 'achat de '.$_GET['prix'].' dinars';?>" hidden>
          <input name="ID_COMMANDE" value="0" hidden>
          <input name="PRIX" value="<?php echo $_GET['prix'];?>" hidden>
          <label for="COMPTE_CB"><p style="color:black">compte cb:</p></label>
          <input type="text" name="COMPTE_CB" required>
        <input type="submit" class="b" value="Confirmer l'achat">
          </td>
          
        </tr>
      </table>
      <table align="center">
      <tr><br> <br></tr>
         <tr>
          
          <td> <a href="panier.php" ><button3 type="button" class="b">Supprimer l'achat</button3> </a>  </td>
        
        </tr></table>

    
    <br>
      <br>
      <br>
     
    
    </body>

<footer>

    <h1>Nos contacts</h1>
    <div class="contacts">
        
        

        

    </div>

    <p id="contact">Contact : 26 995 933 </p>
    <p id="adresse">adresse : cite ghazela , ariana soghra </p>
</footer>

</body>
</html>
<?php  
    ob_end_flush();
    ?>