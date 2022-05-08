<?php
  require '../controller/commandeC.php';
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=liste_des_commandes.com.xls");
$commandeC = new commandeC();
 $commandeS = $commandeC->affichercommande();
 ?>
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border='2'>
                                    <thead>

  <tr>
    <th>ID_Commande</th>
    <th>ID_OFFRE</th>
    <th>ID_CLIENT</th>

  </tr>
  
  <?php 
                foreach($commandeS as $commande) {
        ?>

                                                <td><?php echo $commande['ID_Commande'] ; ?></td>
                                                <td><?php echo $commande['ID_OFFRE'] ; ?></td>
                                                <td><?php echo $commande['ID_CLIENT'] ; ?></td>
                                               
                                               
                                                
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