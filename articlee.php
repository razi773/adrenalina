
<?php
    require_once     '../controller/articleC.php';
    require_once '../model/article.php' ;
    require_once '../model/commentaire.php' ;
    require_once '../Assets/Utils/config.php';
    $bdd = new PDO('mysql:host=localhost;dbname=web;charset=utf8','root','');
    
    
     
    
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
</head>

<body>
  <nav>

    <h1>ADRENALINA</h1>
    <div class="onglets">
    <a href="#home"  onclick=window.location.href='article.html'>Home</a>
            <a href="#Articles"  onclick=window.location.href='articlee.php'>article</a>
            
            
            <a href="#contact">Contact</a>

    </div>
  </nav>


  <header>
    <h1>ADRENALINA</h1>
    <h4>LE MEILLEUR SITE DE PARK</h4>

  </header>
 


  <?php 
                foreach ($articleS as $article) {
                  
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
                 
               <form method="POST">
             
<input type="text" name="pseudo" placeholder="votre pseudo "/><br/>
<br/>
<input type="text" name="commentaire" placeholder="votre commentaire..."/></textarea><br/>
<br/>
                        <input type="submit" value="poster mon commentaire" name="submit_commentaire"/> 
                    
</form>
<?php if(isset($c_msg)){echo $c_msg;} ?>
               
             </td>
           </tr>
         
        <?php
                }
        ?>
        
    </table>
   
</div>

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


</body>

</html>
<!DOCTYPE html>
