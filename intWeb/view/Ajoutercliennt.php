<?php

    include_once '../Model/cliennt.php';
    include_once '../Controller/clienntC.php';
    include("functions1.php");

    if (isset($_POST['id'] ) && isset($_POST['nom'] ) && isset($_POST['prenom'] ) && isset($_POST['Adresse'] ) && isset($_POST['Num'] )&& isset($_POST['types'] ) && isset($_POST['RIB'] ))
    {
            $cliennt = new cliennt($_POST['id'] , $_POST['nom'],$_POST['prenom'] , $_POST['Adresse'], $_POST['Num'],$_POST['types'], $_POST['RIB'] );
            $clienntC = new clienntC();
            $clienntC->Ajoutercliennt($cliennt);
            header('Location:confsupr1.php');
    }
    else{
        $clienntC=new clienntC();
        $resultats=$clienntC->affichercliennt();
    }

    ?>
    <div id="google_translate_element"></div>
    <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
    </script>
    
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>   

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <title>Site parc d'attraction  - Frenchcoder</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--<script language="javascript">

/*function verif()
{
    if (document.form1.nom.value=="" || document.form1.prenom.value=="" || document.form1.id.value=="" || document.form1.Adresse.value=="" 
    || document.form1.Num.value=="" || document.form1.types.value=="" || document.form1.RIB.value=="")
    {
        alert("Remplir les champs !!"); 
    }
}*/
</script>-->


  <nav>
  <img src="6.PNG" width="200" height="50">
    <div class="onglets">
    <a href="#produits"onclick=window.location.href='produitt.php'>Nos produits</a>
        <a href="#panier"onclick=window.location.href='panier.php'>panier</a>
        <a href="#types" onclick=window.location.href='afficherfronttype.php'>types</a>
            <a href="#Articles"  onclick=window.location.href='articlee.php'>article</a>
            <a href="#Ticket" onclick=window.location.href='Ajoutercliennt.php'>Ticket en ligne</a>

        <a href="#notifications">Notifications</a>
</nav>

<header>
    <h1>ADRENALINE,</h1>
    <h4>LE MEILLEUR PARC D'ATTRACTION </h4>
    <button>Parcourir</button>
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


</section>


        <form name="form1" action="" method="POST">


        <p align="center"><b><font size="6" face="Castellar" color="#FF0000">Tickets 
    en ligne</font></b></p>
    <p align="center">&nbsp;</p>
    <p align="center">
    <p align="left">
    <img border="0" src="100.PNG" width="1649" height="225"></p>

    <p>&nbsp;</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; nom :&nbsp;&nbsp;&nbsp; 

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="nom" id="nom" maxlength="20">
    &nbsp;&nbsp;&nbsp; age: &nbsp;&nbsp;&nbsp; <input type="number" name="id" id="id"></p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Prenom :&nbsp;&nbsp;&nbsp; <input type="text" name="prenom" id="prenom"> </p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Adresse :&nbsp;&nbsp;&nbsp; <input type="text" name="Adresse" id="Adresse"></p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Num tel :&nbsp;&nbsp;&nbsp; +216&nbsp;&nbsp;
    <input type="number" name="Num" id="Num"></p>
    <p><font size="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<font color="#CC99FF">Edition standart&nbsp; </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<font color="#0099FF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Edition Avance</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><font size="4" color="#FF9966">Edition Deluxe</font></p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img border="0" src="277676330_1375446382973635_7239001803444296293_n.png" width="244" height="95">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;<img border="0" src="277617871_689104885845406_2859678892397385646_n.png" width="237" height="97">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<img border="0" src="277690584_377731380884730_6439929285180550116_n.png" width="266" height="100"></p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1: &nbsp; 20dt  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2: &nbsp;  30dt &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3:  &nbsp; 35DT
    <br>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Type de Ticket  :&nbsp;&nbsp;&nbsp;     <input type="number" name="types" id="types"></p>
    <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date:&nbsp;&nbsp;</label>
    <input type="date" id="start" name="trip-start"
    <p>&nbsp;</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MODE DE PAIMENT :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" value="V1" name="R1"><img border="0" src="200.PNG" width="60" height="28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="R1" value="V2"><img border="0" src="300.PNG" width="53" height="36">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="R1" value="V3"><img border="0" src="400.PNG" width="74" height="39"></p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CODE RIB :&nbsp;&nbsp;&nbsp; <input type="number" name="RIB" id="RIB"></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input  type="submit" value="Valider" onclick="javascript:verif();"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input  type="reset" value="Annuler" name="B2"></p>

    <script src="verif.js"></script>  

    

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


        </form>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script>
  function addDarkmodeWidget() {
    new Darkmode().showWidget();
  }
  window.addEventListener('load', addDarkmodeWidget);
</script>
</html>
