

<div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}

</script>
<script>
        function showNotification() {
            const notification = new Notification ("Nouvelle notification",
            {
            body: "bienvenue !!!",
            icon: "Images/Rueeus.PNG"
        });
            notification.onclick = (e) =>{
                window.location.href = "produit.html";

            };
        }

        console.log(Notification.permission);
        if(Notification.permission === "granted")
        {
            showNotification();
        }
        else if (Notification.permission !== "denied")
        {
            Notification.requestPermission().then(permission =>{
                if(permission === "granted"){
                    
                    showNotification();
                }
                
                        });
        }
    </script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<?php
    require_once     '../controller/produitC.php';
    
 $produitC = new produitC();
 
    $produitS = $produitC->afficherproduit();
    


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <title>Site parc d'attraction  - Frenchcoder</title>
    
    <link rel="stylesheet" href="produit.css">
    <link rel="stylesheet" href="pagination.css">
</head>
  <body>
  <nav>
    <h1>Adrelanine</h1>
   
    <div class="onglets">
        
        <a href="#produits"onclick=window.location.href='produitt.php'>Nos produits</a>
        
        <a href="#types" onclick=window.location.href='afficherfronttype.php'>types</a>
        <a href="#contact">Contact</a>
    </div>
</nav>

<header>
    <h1>Adrelanina</h1>
    <h4>LE MEILLEUR PARC D'ATTRACTION </h4>
    
    <button>Parcourir</button>
    
</header>
<html>
    <head>
    
</head>
<section class="main" id="produits">
<h1>C'est votre boutique, votre chez-vous.</h1>
    <div class="content">
    
        <div class="card">
        
            <div class="left">
                <h1>Commandez nos produits en ligne </h1>
                
            </div>
            
        </div>

       
    </div>
</section>





 




<div class="card shadow mb-4">
    <div class="card-header py-3">
        <!--<h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>-->
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
              
  <?php 
                foreach ($produitS as $produit)
                {
                            ?>
    			<div class="col-lg-3 d-flex">
    				<div class="coach align-items-stretch">
	    				<div class="text bg-white p-4 ftco-animate">
                      
                        <section class="main" id="produits">
                        <div class="content">
    <div class="card">
        <div class="right">
              
                       <h4 class="id_produit"> <img src="<?php echo $produit['id_produit'].".png"; ?>"alt="" style= width='100px' height='100px'> </timezone_identifiers_list><p>  
                        </div>
                        <!--  <div class="img" ><img src="<?php echo $article['Image1'] ?> " width="250" height="150" ></div>-->
                        <div class="left">
                        <p><label for="nom">nom produit: <a href="#"><?php echo $produit['nom'] ?></a></h3>
                <h4><label for="prix">prix produit:<?php echo $produit['prix'] ?></h4>
                <h4><label for="quantite">quantite produit:<?php echo $produit['quantite'] ?></h4>
	    					<p><h4><label for="id_produit">id_produit: <?php echo $produit['id_produit'] ?></h4></p>
                            <p><h4><label for="description1">description: <?php echo $produit['description1'] ?></h4></p>
                            
                           <a href="supprimerp1.php?id_produit=<?php echo $produit['id_produit'] ; ?></a>
                          <a href="modifierp1.php?id_produit=<?php echo $produit['id_produit'] ; ?></a>
    
	               
                    <p><font color="#808080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="achete.php?id_produit=<?php echo $produit['id_produit'];?>"><p><button>ajouter au panier</button></p></a>
                    </div>
                   
                    </div>
                    
	    					<p></p>
	    				</div>
	    			</div>
    			</div>
                </div>
          <?php
                }
          ?>
      </div>   
</table>
 
</section> 
      
</html>
                
<!--<div class="pagination">
                 <?php for($x = 1; $x <= $pages; $x++):?>
                  <a href="?page=<?php echo $x; ?>&per-page=<?php echo $perpage; ?>"<?php if($page == $x) {echo 'class="selected"'; } ?>><?php echo $x; ?></a>
                  <?php endfor; ?>
                </div>-->
    <footer>

<h1>Nos contacts</h1>

<div class="contacts">
    
    

    

</div>

<p id="contact">Contact : 26 995 933 </p>
<p id="adresse">adresse : cite ghazela , ariana soghra </p>
</footer>
    
  

  <!-- loader -->
  
</html>