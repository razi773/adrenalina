<?php
    ob_start();
  
   require_once '../controller/produitC.php';
   
$articleC = new produitC();

    $articleS = $articleC->afficherproduit();
    require_once '../controller/commandeC.php';
    include('../phpqrcode/qrlib.php');
    $commandeC = new commandeC();
    $commandeS = $commandeC->affichercommande();
?>



    

<div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}

</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Site parc d'attraction  - Frenchcoder</title>
    <link rel="stylesheet" href="produits.css">
    
    

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
            <a href="#Ticket" onclick=window.location.href='Ajoutercliennt.php'>Ticket en ligne</a>

        <a href="#contact">Contact</a>
            <i class="fa fa-shopping-cart"></i></a>
            
        </div>
    </nav>

      

      <header>
      <table align="center">
<tr>    <td>   <h1>Mes Achats</h1></td>
</tr></table>
      </header>

<?php
if (isset($_POST['coupon'])) {
    $coupon = $commandeC->recupererCoupon($_POST['coupon']);
    if (isset($coupon['value'])) {
        $couponValue=$coupon['value'];
    } else {
    ?>
    <script>
    alert('coupon invalide');
    </script>
    <?php
}
} 
    ?>

<br> <br>  <br> <br> 
<div class="cards1">
<?php 
               $somme =0;
              /* foreach($articleS as $article) {
                    //getarticlebyID
                   // $article = $commandeC->CgetarticlebyID($commande['ID_OFFRE']);
                   */
                    //$id_user = $_SESSION["id_user"];
                   foreach($commandeS as $commande) {
                       $article = $commandeC->getproduitbyID($commande['ID_OFFRE']);
                     //  var_dump($article);
                      // if ($id_user == $commande['ID_CLIENT']) {
                          $somme += $article['prix'];
                          $tot = $somme;
                          
        ?>



    <div class="card1">
      <div class="card-header">
     
      <table border="1" align="center">
                <tr>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;image&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;titre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prix&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;description&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quantite&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                 
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;supprimer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    
                    
                </tr>
          <tr>
          <td><h4 class="id_produit"> <img src="<?php echo $article['id_produit'].".png"; ?>"alt="" style= width='150px' height='150px'> </timezone_identifiers_list> </td>
       <td> <h4 class="nom"><?php echo $article['nom'];?></h4> </td>
       <td> <h4 class="prix"><?php echo $article['prix'];?>TND</h4> </td>
     <!-- </div>
      <div class="card-body">-->
     <td> <h4 class="description1"><?php echo $article['description1'];?></h4>  </td>
      
     <td> <h4 class="quantite">qunatite : <?php echo $article['quantite'];?></h4></td>
     
     <td><a href="supprimer_commande.php?id=<?php echo $commande['ID_Commande'];?>"><img src="../assets/img/supp.png" witdh='25px' height='25px'></a></td>
              <td><a href=codeqr.php?id=<?php echo $commande['ID_Commande'];?>&prix=<?php echo $article['prix'] ; ?>"><img src="../assets/img/codeqr.jpg" witdh='50px' height='50px'> </a></td>         
    </th>
      </tr>
      </div>
      <br> <br> <br>
      <?php 
    }

    ?>  
      </div> 
      <br>
      <br>
    <table><tr>
   
    </table>
    <table align="right">
    <td><a href="confsupr.php?prix=<?php echo $somme;?>"><button type="button" class="btn btn-dark">acheter tous</button></a></td></tr>
    </table>
</tr>
</table>
              <!-- /.container-fluid -->

          </div>


     
</table>
<div class="cart-body">
                                                    <div class="row">
                                                        <div class="col-md-12 order-2 order-lg-1 col-lg-5 col-xl-6">
                                                            <div class="order-note">
                                                                <form method="POST">
                                                                    <div class="form-group">
                                                                        <div class="input-group">
                                                                            <input type="search" class="form-control" name="coupon" placeholder="Coupon Code" aria-label="Search" aria-describedby="button-addonTags">
                                                                            <div class="input-group-append">
                                                                                <button class="input-group-text" type="submit" id="button-addonTags">Apply</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 order-1 order-lg-2 col-lg-7 col-xl-6">
                                                            <div class="order-total table-responsive ">
                                                                <table class="table table-borderless text-right">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Sub Total :</td>
                                                                            <td><?php echo $somme; ?>DT</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Shipping :</td>
                                                                            <td>$0.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <?php
                                                                            //$subTotale=100;
                                                                            $tax = $somme/100*18;
                                                                            ?>
                                                                            <td>Tax(18%) :</td>
                                                                            <td><?php echo $tax; ?>DT</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="f-w-7 font-18">
                                                                                <h4>Amount :</h4>
                                                                            </td>
                                                                            <td class="f-w-7 font-18">
                                                                                <?php
                                                                                //$subTotale=10;
                                                                                $prixFinale = $somme+$tax;
                                                                                    if (isset($couponValue)) {
                                                                                    $prixOriginale = $somme+$tax;
                                                                                    $prixFinale = $prixOriginale - ($prixOriginale * $couponValue / 100);?>
                                                                                    <h4><?php  echo $prixFinale; ?>DT</h4> <h6><strike><?php  echo $prixOriginale; ?>DT</strike></h6>
                                                                                <?php    } else { ?>
                                                                                <h4><?php  echo $somme+$tax; ?>DT</h4>
                                                                                <?php } ?>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
<footer>

    
<h1>Nos services</h1>
<div class="services">
    
    <div class="service">
       
        <p>Découvrez nos services en ligne complets .</p>
    </div>
    <br>

    <div class="service">
        <h3>Paiement en ligne</h3>
        <p>Découvrez les méthodes faciles de Paiement en ligne ( paiment banquaire ).</p>
    </div>

    
</div>

<p id="contact">Contact : telephone: +216 70 000 111 | Facebook/Instagram:  ADRENALINA | Gmail: ADRENALINA.ESPRIT@gmail.com | &copy; 2021, ADRENALINA.</p>
</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script src="./script.js"></script>
<script>
  function addDarkmodeWidget() {
    new Darkmode().showWidget();
  }
  window.addEventListener('load', addDarkmodeWidget);
</script>

</html>
<?php  
    ob_end_flush();
    ?>