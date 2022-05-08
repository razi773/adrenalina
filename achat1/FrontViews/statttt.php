<?php
  require '../controller/commandeC.php';

$commandeC = new commandeC();
 $commandeS = $commandeC->affichercommande();
 ?>
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['titre', 'participants'],
         <?php
         $sql = "SELECT * FROM commande";
         $fire = mysqli_query($con,$sql);
          while ($commande = mysqli_fetch_assoc($fire)) {
            echo"['".$commande['ID_OFFRE']."',".$commande['ID_CLIENT']."],";
          }

         ?>
        ]);
        var options = {
          title: 'statistiques des categories des articles'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>