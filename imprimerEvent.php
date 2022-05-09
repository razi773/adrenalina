<?PHP
    include "../controller/EventC.php";
	//include "../../controller/categorieC.php";
	$EventC = new EventC();
	$EventS=$EventC->afficherEvent();
	//$categorieC = new categorieC();
	//$listecategorie=$categorieC->affichercategorie();
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--<a class="logo" href="showProduit.php">-->

        <link rel="stylesheet" href="styleaffichage.css">
        
        </a>
		<title> LISTE DES EVENEMENTS </title>
    </head>
    <body onload="window.print()">

		<hr>
		<table border=1 align = 'center'>
			<tr>
            <th>NumEvent</th>
				<th>Nom</th>
				<th>Date</th>
				<th>Description</th>
				


				
			</tr>
			<?PHP
				//foreach ($listecategorie as $categorie){
			?>

			<?PHP
				foreach ($EventS as $Event){
			?>
            		<tr>
                    <td><?php echo $Event['NumEvent']; ?></td>
				<td><?php echo $Event['Nom']; ?></td>
				<td><?php echo $Event['Date']; ?></td>
				<td><?php echo $Event['Description']; ?></td>
					
					
				</tr>
			<?PHP
				}
			?>

            <!--<?PHP
				//}
			?>-->
			
		</table>
	</body>
</html>