<?php

require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;
$fichier = '
<nav>
    <h1>AIM</h1>
    
</nav>
<head>

    <head>
        <br>
        <br>
        <br>
            <h1>Recu</h1>
       
    </head> 
      

   
<br>
<div>
      <label for ="id_produit:">id_produit:'.$_POST['id_produit'].'
    </label>
</br>
<br>
      <label for ="description1:">description1:'.$_POST['description1'].'
    </label>
</br>
<br>
      <label for ="prix :">prix :'.$_POST['prix'].'
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