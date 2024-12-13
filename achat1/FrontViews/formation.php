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
        <a href="panier.php">Panier</a>
        
    </div>
</nav>

<header>
    <h1>Adrelanine,</h1>
    <h4>LE MEILLEUR PARC D'ATTRACTION </h4>
    
</header>

<section class="produits" id="produits">
  
<div class="cards">
<?php foreach ($formationS as $formation): ?>
    <div class="card">
    
      <img src="<?php echo $formation['id'].".png"; ?>"alt="" style="width:400">
      <div class="card-header">
        <h4 class="title"> <?php echo $formation['titre'];?></h4>
        <h4 class="price">prix :<?php echo $formation['prix'];?>TND</h4>
      </div>
      <div class="card-body">
      <h4 class="description"><?php echo $formation['description'];?></h4>
      <h4 class="vendeur">par :<?php echo $formation['vendeur'];?></h4>
      
      <div class="container">
      </div>
      <a href="achete.php?id=<?php echo $formation['id'];?>"><p><button>ajouter au panier</button></p></a>
      <?php endforeach;?>  
      </div> 

</section>

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