<?php
 require_once     '../controller/produitC.php';
    
 $produitC = new produitC();
 
    $produitS = $produitC->afficherproduit();
 $bdd = new PDO('mysql:host=localhost;dbname=parc;charset=utf8','root','');
    
 $page= isset($_GET["page"]) ? (int)$_GET['page'] : 1;
 $perpage = isset($_GET['per-page']) && $_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 2;

 $start = ($page > 1) ? ($page * $perpage) - $perpage : 0;
  
  $articles = $bdd->prepare("
        SELECT SQL_CALC_FOUND_ROWS id, description, nom, quantite 
        FROM produit
        LIMIT {$start}, {$perpage}
     ");

     $articles->execute();
     $articles=$articles->fetchAll(PDO::FETCH_ASSOC);

     $total = $bdd->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
  $pages= ceil($total / $perpage);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <head>
        <body>
             
             <?php 
                foreach ($produitS as $produit)
                {
                            ?>
    			<div class="col-lg-3 d-flex">
    				<div class="coach align-items-stretch">
	    				<div class="text bg-white p-4 ftco-animate">
                        <h4 class="id_produit"> <img src="<?php echo $produit['id_produit'].".png"; ?>"alt="" style= width='100px' height='100px'> </timezone_identifiers_list><p>  
                      <!--  <div class="img" ><img src="<?php echo $article['Image1'] ?> " width="250" height="150" ></div>-->
                      <p><label for="nom">nom produit: <a href="#"><?php echo $produit['nom'] ?></a></h3>
                <h4><label for="prix">prix produit:<?php echo $produit['prix'] ?></h4>
                <h4><label for="quantite">quantite produit:<?php echo $produit['quantite'] ?></h4>
	    					<p><h4><label for="id_produit">id_produit: <?php echo $produit['id_produit'] ?></h4></p>
                            <p><h4><label for="description1">description: <?php echo $produit['description1'] ?></h4></p>
                           <a href="supprimerp1.php?id_produit=<?php echo $produit['id_produit'] ; ?></a>
                          <a href="modifierp1.php?id_produit=<?php echo $produit['id_produit'] ; ?></a>
    
	               
                    <p><font color="#808080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" value="Acheter" name="B7">
	            
	    					<p></p>
	    				</div>
	    			</div>
    			</div>
              
          <?php
                }
          ?>
     
</table>
<div class="pagination">
                 <?php for($x = 1; $x <= $pages; $x++):?>
                  <a href="?page=<?php echo $x; ?>&per-page=<?php echo $perpage; ?>"<?php if($page == $x) {echo 'class="selected"'; } ?>><?php echo $x; ?></a>
                  <?php endfor; ?>
                </div>
 
            </body>
</html>
                

                