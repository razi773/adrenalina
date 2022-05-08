
<?php
  include "../controller/articleC.php";
  require_once     '../controller/commentaireC.php';
  require_once '../model/commentaire.php' ;
  $bdd = new PDO("mysql:host=localhost;dbname=achat1;charset=utf8", "root", "");
  if (isset($_POST['submit_commentaire'])){
    if(isset($_POST['pseudo'],$_POST['commentaire'])  AND !empty($_POST['pseudo']) AND !empty($_POST['commentaire']))
    {
      
      $pseudo = htmlspecialchars($_POST['pseudo']);
      $commentaire = htmlspecialchars($_POST['commentaire']);
  if(strlen($pseudo)<25){
    $ins = $bdd->prepare('INSERT INTO commentaires (id_article, commentaire, pseudo) VALUES (?,?,?)');
    $ins->execute(array($getid,$pseudo,$commentaire));

    $c_msg ="<span style 'color:green'>votre commentaire a bien ete poste</span> ";

  }
  else{
    $c_msg = "le pseudo doit faire moins de 25 caractere";
  }



    }else{
      $c_msg = "tous les champs doivent etre completes";
    }
  }
  $controller = new articleC();
  $commentaireC = new commentaireC();

  
 
    $articleS = $controller->getarticle($_GET["id"]);
 
  $lis = "";
  foreach($articleS as $article) {
      $id = $article["id"];
      $lis .= "<li><a href='#'>$id</a></li>";
  }
  $table = "";
      foreach($articleS as $article) {
        $titre = $article["titre"];
        $description = $article["description"];
        $date = $article["date"];
        $auteur = $article["auteur"];
        $likes =$bdd->prepare('SELECT id FROM likes WHERE id_article = ?');
        $likes->execute(array($id));
        $likes = $likes->rowcount();

        $dislikes =$bdd->prepare('SELECT id FROM dislikes WHERE id_article = ?');
        $dislikes->execute(array($id));
        $dislikes = $dislikes->rowcount();
        
        $tr = "
        <div id='corps' align=center >
         <tr>
        <br>
       
        <td class='tablee'>
        <td class='tablee'>
              <table  class='table_2'>
              <br>
                <tr height=40> 
                             
                        <td colspan=2 > $description                         
                    
                    <tr >
                        <td   rowspan=2>$auteur
                           <td colspan=2 >
                            
                           $date
                            
                           

                    
                    <tr height=40> 
                    $titre    
                      
                                             
                 
                 
               </table>
             
           
           
           </table>
           </div>";
           $table.=$tr;
      }
          
?>


<!DOCTYPE html>
<html lang="fr">
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> ADRENALINA </title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="art.css">
  <link rel="shoet icon" href="image/logo.png">
</head>

<body>
  <nav>

    <h1>ADRENALINA</h1>
    <div class="onglets">
    <a href="#">Home</a>
        <a href="#produits"onclick=window.location.href='produitt.php'>Nos produits</a>
        <a href="#panier"onclick=window.location.href='panier.php'>panier</a>
        <a href="#types" onclick=window.location.href='afficherfronttype.php'>types</a>
            <a href="#Articles"  onclick=window.location.href='articlee.php'>article</a>
         
            <a href="#Chercher"  onclick=window.location.href='search.php'>chercher</a>
            <a href="#contact">Contact</a>

    </div>
  </nav>


  <header>
    <h1>ADRENALINA</h1>
    <h4>LE MEILLEUR SITE DE PARK</h4>

  </header>
  
<div id="google_translate_element"></div>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

 
  <section>
 
  <?php 
                foreach ($articleS as $article) {
        ?>

<div id="corps" align=center >
<div class="card" style="width:70%;" >
<h5 class="card-title"> <?php echo $article['titre'] ; ?>  </h5>
  <img src="image/grand roue.jpg" class="card-img-top" alt="...">
  <div class="card-body">


  
    <p class="card-text"><?php echo $article['description'] ; ?></p>
    <br>
    <br>
    <br>
    <ul class="list-group list-group-flush">
    <li class="list-group-item"><span class="date"><i class="fas fa-calendar"></i> <?php echo $article['date'] ; ?></span></li>
    <li class="list-group-item"><span class="author"><i class="fas fa-user"></i>    <colspan=2 > <?php echo $article['auteur'] ; ?>  </span></li>
   
  </ul>
 
  </div>
</div>
                </div> 
                <a href="action.php?t=1&id=<?= $id ?>">J'aime</a>(<?= $likes ?>)
                <br/>
                <a href="action.php?t=2dislikes&id=<?= $id ?>">Je n'aime pas</a>(<?= $dislikes ?>)
                <br/>
                <?php 
  

  ?> 
  <form method="POST">
             
             <input type="text" name="pseudo" placeholder="votre pseudo "/><br/>
             <br/>
             <input type="text" name="commentaire" placeholder="votre commentaire..."/></textarea><br/>
             <br/>
                                     <input type="submit" value="poster mon commentaire" name="submit_commentaire"/> 
                                 
             </form>
             <?php  echo "commentaires";?>  
             <br/>
  <?php 
 
  $commentaireS = $commentaireC->affichercommentaire1($article['id']);
 
    foreach ($commentaireS as $commentaire){
      
      echo $commentaire['pseudo'] ;
      echo ":" ; ?>  
       
      <br/>
    
      <?php  
  echo $commentaire['commentaire'] ;}
  ?> 
     <br/>



     <?php 
    
?>    
       
        <?php
                }
              

        ?>

        
 
</section>
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script>
  function addDarkmodeWidget() {
    new Darkmode().showWidget();
  }
  window.addEventListener('load', addDarkmodeWidget);
  </script>


  <footer>

    <h1>Nos services</h1>

    <p>Découvrez nos services en ligne complets .</p>
    <br>

    <div class="service">
      <h3>Paiement en ligne</h3>
      <p>Découvrez les méthodes facile de Paiement en ligne ( paiment banquaire ).</p>
    </div>


    </div>

    <p id="contact">Contact : telephone: +216 70 000 111 | Facebook/Instagram: AIM | Gmail: AIM.ESPRIT@gmail.com |
      &copy; 2021, AIM.</p>
  </footer>


</body>

</html>