<?
require '../Controller/clienntC.php';
//require '../Controller/participantC.php';


$clienntC = new clienntC();
   $clienntS = $clienntC->affichercliennt();
 //  $participantC = new participantC();
   $clienntS = $clienntC->affichercliennt();

?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    
    <title>Site parc d'attraction  - Frenchcoder</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <h1>Adrelanine</h1>
    <div class="onglets">
        
        <a href="#produits">Nos produits</a>
        <a href="#contact">Contact</a>
    </div>
</nav>

<header>
    <h1>Adrelanine,</h1>
    <h4>LE MEILLEUR PARC D'ATTRACTION </h4>
   
</header>

<table align="center">
        <tr>    <td> 
        <form action="recu1.php" method="POST" >
          <input name="id" value="<?php echo rand(1,10000);?>" hidden>
          <input name="Num" value="<?php echo 'achat de '.$_GET['Num'];?>" hidden>
          <input name="nom" value="0" hidden>
          <input name="prenom" value="<?php echo $_GET['prenom'];?>" hidden>
          <label for="RIB"><p style="color:black">RIB:</p></label>
          <input type="text" name="prenom" required>
        <input type="submit" class="b" value="Confirmer l'achat">
          </td>
          
        </tr>
      </table>
      <table align="center">
      <tr><br> <br></tr>
         <tr>
          
          <td> <a href="Ajoutercliennt.php" ><button3 type="button" class="b">Supprimer l'achat</button3> </a>  </td>
        
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
