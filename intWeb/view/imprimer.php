<?PHP
    include '../controller/produitC.php';
    require_once '../config.php';
    $produitC = new produitC();
 
    $produitS = $produitC->afficherproduit();
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
		<title> LISTE DES PRODUITS </title>
    </head>
    <body onload="window.print()">

		<hr>
		<table border=1 align = 'center'>
			<tr>
            <th>id_reclamation________________________________</th>
				<th>nom_______________________________________</th>
				<th>description_______________________________________</th>
				<th>prix_________________________________</th>
				<th>quantite__________________</th>


				
			</tr>
			<?PHP
				//foreach ($listecategorie as $categorie){
			?>

			<?PHP
				foreach ($produitS as $produit){
			?>
            		<tr>
                    <td><?php echo $produit['id_produit']; ?></td>
				<td><?php echo $produit['nom']; ?></td>
				<td><?php echo $produit['description1']; ?></td>
				<td><?php echo $produit['prix']; ?></td>
				<td><?php echo $produit['quantite']; ?></td>
					
					
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