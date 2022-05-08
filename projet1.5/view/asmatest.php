

<div id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}

</script>
<script>
        function showNotification() {
            const notification = new Notification ("Nouvelle notification",
            {
            body: "bienvenue !!!",
            icon: "Images/Rueeus.PNG"
        });
            notification.onclick = (e) =>{
                window.location.href = "produit.html";

            };
        }

        console.log(Notification.permission);
        if(Notification.permission === "granted")
        {
            showNotification();
        }
        else if (Notification.permission !== "denied")
        {
            Notification.requestPermission().then(permission =>{
                if(permission === "granted"){
                    
                    showNotification();
                }
                
                        });
        }
    </script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<?php
    require_once     '../controller/produitC.php';
    
 $produitC = new produitC();
 
    $produitS = $produitC->afficherproduit();
    


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <title>Site parc d'attraction  - Frenchcoder</title>
    
    <link rel="stylesheet" href="produit.css">
    <link rel="stylesheet" href="pagination.css">
</head>
  <body>
  <nav>
    <h1>Adrelanine</h1>
   
    <div class="onglets">
        
        <a href="#produits"onclick=window.location.href='produitt.php'>Nos produits</a>
        
        <a href="#types" onclick=window.location.href='afficherfronttype.php'>types</a>
        <a href="#contact">Contact</a>
    </div>
</nav>

<header>
    <h1>Adrelanina</h1>
    <h4>LE MEILLEUR PARC D'ATTRACTION </h4>
    
    <button>Parcourir</button>
    
</header>
<html>
    <head>
    
</head>
<section class="main" id="produits">
<h1>C'est votre boutique, votre chez-vous.</h1>
    <div class="content">
    
        <div class="card">
        
            <div class="left">
                <h1>Commandez nos produits en ligne </h1>
                
            </div>
            
        </div>

       
    </div>
</section>





 




<section class="main" id="produits">

<div class="content">
    <div class="card">
        <div class="left">
            <h1>Nos valeurs</h1>
            <p>Mangez sainement mais délicieusement. Nos clients sont rois, nos clients sont nos patrons.</p>
        </div>
        <div class="right">
            <img src="https://i.ibb.co/WWnjDdG/burger1.jpg" alt="">
        </div>
    </div>

    <div class="card">
        <div class="left">
            <h1>Nos recettes</h1>
            <p>Nous mettons à votre disposition les recettes de nos burgers les plus délicieux ! </p>
        </div>
        <div class="right">
            <img src="https://i.ibb.co/LS2T9sD/burger2.jpg" alt="">
        </div>
    </div>
</div>
</section>
    <footer>

<h1>Nos contacts</h1>

<div class="contacts">
    
    

    

</div>

<p id="contact">Contact : 26 995 933 </p>
<p id="adresse">adresse : cite ghazela , ariana soghra </p>
</footer>
    
  

  <!-- loader -->
  
</html>