<?php
  require '../Controller/produitC.php';
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=liste_des_produit.com.xls");
$produitC = new produitC();
 $produitS = $produitC->afficherproduit();
 ?>
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border='2'>
                                    <thead>

  <tr>
  <th>id_produit</th>
    <th>nom</th>
    <th>prix</th>
    <th>description</th>
    <th>quantite</th>
    <th>id_type</th>
   

  </tr>
  
  <?php 
                foreach ($produitS as $produit) {
        ?>

                                                <td><?php echo $produit['id_produit'] ; ?></td>
                                                <td><?php echo $produit['nom'] ; ?></td>
                                                <td><?php echo $produit['prix'] ; ?></td>
                                                <td><?php echo $produit['description1'] ; ?></td>
                                                <td><?php echo $produit['quantite'] ; ?></td>
                                                <td><?php echo $produit['id_type'] ; ?></td>
                                               



                                               
                                               
                                                
                                                </tr>
                                            
                                                </div>
                      </div>
                  </div>

              </div>
              <!-- /.container-fluid -->

          </div>


      <?php
              }
      ?>
</table>