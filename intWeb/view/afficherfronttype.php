<?php
    require_once     '../controller/typeC.php';
    require_once '../model/type.php' ;

    
    $typeC = new typeC();
    $typeS = $typeC->affichertype();
  
?>
 
    

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <title>Site parc d'attraction  - Frenchcoder</title>
    
    <link rel="stylesheet" href="produits.css">
</head>
  <body>
  <nav>
    <h1>Adrenalina</h1>
    <div class="onglets">
        
    <a href="#">Home</a>
    <a href="#produits"onclick=window.location.href='produitt.php'>Nos produits</a>
        <a href="#panier"onclick=window.location.href='panier.php'>panier</a>
        <a href="#types" onclick=window.location.href='afficherfronttype.php'>types</a>
            <a href="#Articles"  onclick=window.location.href='articlee.php'>article</a>
            <a href="#Ticket" onclick=window.location.href='Ajoutercliennt.php'>Ticket en ligne</a>

        <a href="#contact">Contact</a>
    </div>
</nav>

<header>
    <h1>Adrenalina,</h1>
    <h4>LE MEILLEUR PARC D'ATTRACTION </h4>
    <button>Parcourir</button>
</header>
<html>
    <head>
</head>
<section class="main" id="produits">
<h1>C'est votre site, votre chez-vous.</h1>
    <div class="content">
        <div class="card">
            <div class="left">
                <h1>Nos types </h1>
                
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
            <table class="table table-bordered" id="dataTable" width="60%" cellspacing="10">
            <table border="1" align="center" class="table table-bordered" id="dataTable" width="60%" cellspacing="0">
                <thead>
 
                <tr>
    <th>id_type</th>
    <th>nom_type</th>
    <th>quantite_T</th>
  </tr>
        <?php 
                foreach ($typeS as $type) {
        ?>


  <tr>
    <td><?php echo $type['id_type'] ; ?></td>
    <td><?php echo $type['nom_type'] ; ?></td>
    <td><?php echo $type['quantite_T'] ; ?></td>
    
  </tr>
	               
                    <p><font color="#808080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <!--  <input type="submit" value="Acheter" name="B7">-->
	            
	    					<p></p>
	    				</div>
	    			</div>
    			</div>
          <?php
                }
          ?>
          
</table>
</html>
    <footer>

<h1>Nos contacts</h1>
<div class="contacts">
    
    

    

</div>

<p id="contact">Contact : 26 995 933 </p>
<p id="adresse">adresse : cite ghazela , ariana soghra </p>
</footer>
    
  

  <!-- loader -->
  
</html>