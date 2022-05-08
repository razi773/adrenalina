<?php

require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;
$fichier = '
<nav>
  <div class="onglets">
  </div>
</nav>

<header>
  <h1>ADRENALINE,</h1>
  <h4>LE MEILLEUR PARC D"ATTRACTION </h4>
  <p></P>
</header>
<html>
  <head>
</head>
<section class="main" id="produits">

  <div class="content">
      <div class="card">
          <div class="left">
              <h1>TICKETS  </h1>
              
          </div>
          
      </div>

     
  </div>

   
<br>
<div>
      <label for ="age:">age:'.$_POST['id'].'
    </label>
</br>
<br>
      <label for ="prenom:">prenom:'.$_POST['prenom'].'
    </label>
</br>
<br>
      <label for ="RIB:">RIB:'.$_POST['RIB'].'
    </label>
</br>
     
      
</div>
<br>

';
// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($fichier);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
?>