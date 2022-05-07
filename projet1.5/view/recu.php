








<!DOCTYPE html>
<html lang="fr">
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> AIM </title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="arti.css">
  <link rel="shoet icon" href="image/logo.png">
</head>

<body align=center>



  <header>
    <h1>AIM</h1>
    <h4>Recu.</h4>

  </header>
    
        
          

       
    
    <div>
    <table align="center" class="art">
    <tr><br> <br></tr>
       <tr>
        
        <td>
        <form action="pdf.php" method="POST">
            <label for ="id_produit:"><p style="color:black">id_produit:</p>
        </label>
        <input type="number" name="id_produit" value="<?php echo $_POST['id_produit']; ?>" readonly>
    </br>
    <br>
          <label for ="description1:"><p style="color:black">description1:</p>
        </label>
        <input type="text" name="description1"  value="<?php echo $_POST['description1']; ?>" readonly>
    </br>
    <br>
          <label for ="prix:" back><p style="color:black">prix TOTALE:</p>
        </label>
        <input type="number" name="prix" value="<?php echo $_POST['prix']; ?>" readonly>
    </br>
         
          
</div>
<br>
          </table>
<table align="center">
    <tr><br> <br></tr>
       <tr>
        
        <td> <input type="submit" class="btn btn-dark" value="Imprimer le recu en pdf">  </td>
       </form>
      </tr></table>
      
