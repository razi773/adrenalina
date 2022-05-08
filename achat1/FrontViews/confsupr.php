<?php
    ob_start();
    if(!isset($_SESSION)){
        session_start();
    }
    if (!isset($_SESSION["username"]))
    {
        header('Location:login.php');
    }else 
    {
        if ($_SESSION["role_user"] == "Administrateur")
            header("Location:../BackViews/index.php") ;
        else
        {
?>
<?php
require '../Controller/formationC.php';
//require '../Controller/participantC.php';


$formationC = new formationC();
   $formationS = $formationC->afficherformation();
 //  $participantC = new participantC();
   $formationS = $formationC->afficherformation();

?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    
    <title>Site parc d'attraction  - Frenchcoder</title>
    
    <link rel="stylesheet" href="produit.css">
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
<?php } }
    ob_end_flush();
    ?>