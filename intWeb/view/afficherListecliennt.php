<?php 
    include '../Controller/clienntC.php';
    $clienntC=new clienntC();
    $cliennt=$clienntC->affichercliennt();
    
?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Vitrine - Frenchcoder</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <h1>ANDRENALINA</h1>
        <div class="onglets">
            <a href="#">Acceuil</a>
            <a href="#cliennt">Ticket en ligne</a>
            <a href="#contact">Contact</a>
        </div>
    </nav>

    <header>
        <h1>Andrenalina,</h1>
        <h4>Parc d'attraction.</h4>
        <button>Parcourir</button>
    </header>
    </head>
<body>
<a href="Ajoutercliennt.php">Ajouter client </a>
<div class="text-center">
<form action="" method="POST">
    
</div>

 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->

<p class="mb-4">SAISIR VOTRE INFORMATION SVP...<a target="_blank"
        href="https://datatables.net"></a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary ">Liste des Clients</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table border="2" align="center" class="table table-bordered" id="dataTable" width="60%" cellspacing="0">
                <thead>
  <tr>
    <th>ID</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Adresse</th>
    <th>Num</th>
    <th>types</th>
    <th>RIB</th>
  </tr>
        <?php 
                foreach ($cliennt as $cliennt) {
        ?>


  <tr>
    <td><?php echo $cliennt['id'] ; ?></td>
    <td><?php echo $cliennt['nom'] ; ?></td>
    <td><?php echo $cliennt['prenom'] ; ?></td>
    <td><?php echo $cliennt['Adresse'] ; ?></td>
    <td><?php echo $cliennt['Num'] ; ?></td>
    <td><?php echo $cliennt['types'] ; ?></td>
    <td><?php echo $cliennt['RIB'] ; ?></td>
  
    
    <td><a href="supprimercliennt.php?id=<?php echo $cliennt['id'] ; ?>">supprimer</a></td>
    <td><a href="modifiercliennt.php?id=<?php echo $cliennt['id'] ; ?>">modifier</a></td>
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
</body>
<footer>

<h1>Nos Contacts</h1>
<div classe="services">
    
    <div classe="service">
        <h3>Adresse</h3>
        <p>Cite Ghazela , Ariana Soghra.</p>
    </div>

    <div classe="service">
        <h3>Tel </h3>
        <p>FIX : 26995933 / 71588477.</p>
    </div>

</div>

<p id="contact">Contact : 08 19 17 278 1 | &copy; 2021, Burgure.</p>
</footer>
</body>

    
</html>