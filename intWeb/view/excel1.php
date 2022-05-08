<?php
  require '../Controller/clienntC.php';
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=liste_des_cliennts.com.xls");
$clienntC = new clienntC();
 $clienntS = $clienntC->affichercliennt();
 ?>
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border='2'>
                                    <thead>

  <tr>
  <th>age</th>
    <th>nom</th>
    <th>prenom</th>
    <th>Adresse</th>
    <th>Num</th>
    <th>types</th>
    <th>RIB</th>

  </tr>
  
  <?php 
                foreach ($clienntS as $cliennt) {
        ?>

                                                <td><?php echo $cliennt['id'] ; ?></td>
                                                <td><?php echo $cliennt['nom'] ; ?></td>
                                                <td><?php echo $cliennt['prenom'] ; ?></td>
                                                <td><?php echo $cliennt['Adresse'] ; ?></td>
                                                <td><?php echo $cliennt['Num'] ; ?></td>
                                                <td><?php echo $cliennt['types'] ; ?></td>
                                                <td><?php echo $cliennt['RIB'] ; ?></td>



                                               
                                               
                                                
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