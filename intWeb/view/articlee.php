
<?php
    require_once     '../controller/articleC.php';
    require_once     '../controller/commentaireC.php';
    require_once '../model/article.php' ;
    require_once '../model/commentaire.php' ;
    require_once '../Assets/Utils/config.php';
    $bdd = new PDO('mysql:host=localhost;dbname=web;charset=utf8','root','');
    
    $page= isset($_GET["page"]) ? (int)$_GET['page'] : 1;
    $perpage = isset($_GET['per-page']) && $_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 2;
   
    $start = ($page > 1) ? ($page * $perpage) - $perpage : 0;
     
     $articles = $bdd->prepare("
           SELECT SQL_CALC_FOUND_ROWS id, description, titre, auteur, date
           FROM article
           LIMIT {$start}, {$perpage}
        ");

        $articles->execute();
        $articles=$articles->fetchAll(PDO::FETCH_ASSOC);

        $total = $bdd->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
     $pages= ceil($total / $perpage);

    
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
    $articleC = new articleC();
    $commentaireC = new commentaireC();
  
 
    
    if(isset($_POST['tri'])) {
        $articleS = $articleC->triarticle();
     }else {
        $articleS = $articleC->afficherarticle();
      
     }
    if(isset($_GET['id']) AND !empty($_GET['id'])){

if (isset($_POST['submit_commentaire'])){
  if(isset($_POST['pseudo'],$_POST['commentaire'])AND !empty($_POST['pseudo']) AND !empty($_POST['commentaire']))
  {

  }else{
    $c_msg = "tous les champs doivent etre completes";
  }
}

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
  <link rel="stylesheet" href="artic.css">
  <link rel="shoet icon" href="image/logo.png">
  <link rel="stylesheet" href="pagination.css">
</head>


<body>
<div id="google_translate_element"></div>
<p>You can translate the content of this page by selecting a language in the select box.</p>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 
 
  
   
  <nav>

    <h1>ADRENALINA</h1>
    <div class="onglets">
    <a href="#">Home</a>
        <a href="#produits"onclick=window.location.href='produitt.php'>Nos produits</a>
        <a href="#panier"onclick=window.location.href='panier.php'>panier</a>
        <a href="#types" onclick=window.location.href='afficherfronttype.php'>types</a>
            <a href="#Articles"  onclick=window.location.href='articlee.php'>article</a>
            <a href="#Chercher"  onclick=window.location.href='search.php'>chercher article</a>
            <a href="#Ticket" onclick=window.location.href='Ajoutercliennt.php'>Ticket en ligne</a>

            
            
            <a href="#contact">Contact</a>

    </div>
  </nav>


  <header>
    <h1>ADRENALINA</h1>
    <h4>LE MEILLEUR SITE DE PARK</h4>
   

  </header>
  

  <?php

session_start(); // DEMARRE LA SESSION
// SAUVGARDE LA VARIABLE hits DANS LE FICHIER DE SESSION
$hits =0;

// TRAITEMENT SUR LE FICHIER TEXTE
if(empty($hits)){
$fp=fopen("compteur.txt","a+"); //OUVRE LE FICHIER compteur.txt
$num=fgets($fp,4096); // RECUPERE LE CONTENUE DU COMPTEUR
fclose($fp); // FERME LE FICHIER
$hits=$num - -1; // TRAITEMENT
$fp=fopen("compteur.txt","w"); // OUVRE DE NOUVEAU LE FICHIER
fputs($fp,$hits); // MET LA NOUVELLE VALEUR
fclose($fp); // FERME LE FICHIER
}
else echo "no";
// AFICHAGE DU COMPTEUR
echo"<TABLE align=center>";
echo"<TR>";
echo"<TD STYLE='border:1pt Solid navy;' >";
echo"<FONT FACE='Verdana, Arial, Helvetica, sans-serif' SIZE=1>";
echo"Nombre de visiteurs :$hits";
echo"</FONT>";
echo"</TD>";
echo"</TR>";
echo"</TABLE>";
?> 
 

 
<html>

<body>
  



<form method="post" align=center>
<div class="text-center">
<form action="" method="POST">
    <input type="text" name="tri" hidden>
    <input type="submit" value="trier" class="btn btn-primary">
</div>
</form>
               
                    </form>

</body>
</html>
<td><div class="text-center">
  <a href="user_data_print.php" class="btn btn-primary">print </a></td>
</div>


  <?php 
  


  

                foreach ($articles as $article) {
               
             

                  $commentaireS = $commentaireC->affichercommentaire1($article['id']);
                  foreach ($commentaireS as $commentaire)
             



                  
        ?>
       

<tr >

<div id="corps" align=center >
    <table width=100% border=6 cellspacing=12 cellpadding=5>
        <tr>
        <tr>
           
              <table  class="table_2">
                <div class="latest-news pt-150 pb-150">
	

  <div class="row">
    <div >
      <div class="single-latest-news">
        <a href="ai1.html"><div class="latest-news-bg news-bg-1"></div></a>
        <div class="news-text-box">
      
        <p class="blog-meta">
                        
    
							<td>	<span class="author"><i class="fas fa-user"></i>    <colspan=2 > <?php echo $article['auteur'] ; ?>  </span></td>
              <td > <span class="date"><i class="fas fa-calendar"></i> <?php echo $article['date'] ; ?></span>  </td> 
           
             
            </p>                
                    </tr>
                    <tr >
                    
                        <td rowspan=2><p class="excerpt"><?php echo $article['description'] ; ?></p>
                       
                      
                         <a  class="read-more-btn" href='filtrarticle.php?id=<?php echo $article['id'] ; ?>'> read more <i class="fas fa-angle-right"></i></a> </td>
                        <h3><a href="ai1.html"> <td colspan=2 > <?php echo $article['titre'] ; ?>  </td></a></h3>
                    
                      

                    </tr>
                    <tr height=40> 
        
                        <td >    <img class="im" src="image/grand roue.jpg"  ></td> 
                 </tr>
                
                 	</div>
					</div>
				</div>
				</div>
					</div>
          
               </table>
               
               <?php
               if(isset($success))
               echo $success;

               if(!empty($errors)):?>
               <?php foreach($errors as $error): ?>

                <p><?= $error ?></p>
                <?php endforeach; ?> 
                <?php endif; ?>
                 
                 






<?php if(isset($c_msg)){echo $c_msg;} ?>
               
             </td>
           </tr>

         
        <?php
                }
        ?>
        
    </table>
   
</div>
<div class="pagination">
                 <?php for($x = 1; $x <= $pages; $x++):?>
                  <a href="?page=<?php echo $x; ?>&per-page=<?php echo $perpage; ?>"<?php if($page == $x) {echo 'class="selected"'; } ?>><?php echo $x; ?></a>
                  <?php endfor; ?>
                </div>   
</body>

<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script>
  function addDarkmodeWidget() {
    new Darkmode().showWidget();
  }
  window.addEventListener('load', addDarkmodeWidget);
  </script>




</section>


  <footer>

    <h1>Nos services</h1>

    <p>Découvrez nos services en ligne complets .</p>
    <br>

    <div class="service">
      <h3>Paiement en ligne</h3>
      <p>Découvrez les méthodes facile de Paiement en ligne ( paiment banquaire ).</p>
    </div>


    </div>

    <p id="contact">Contact : telephone: +216 26995933 | Facebook/Instagram: ADRENALINA | Gmail: ADRENALINA@gmail.com |
      &copy; 2021, ADRENALINA.</p>
  </footer>




</html>
<!DOCTYPE html>
