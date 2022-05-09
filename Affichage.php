
<?php

require_once     '../controller/participationC.php';
    require_once '../model/participation.php' ;


        $participationC = new participationC();
    if (isset($_POST['id'] ) && isset($_POST['idev'] ) && isset($_POST['idclient'] ) && isset($_POST['email'])) 
    {
          
            $participationC->ajouterparticipation($participation);
            header('Location:afficherparticipation.php');
    }


?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrenalina</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
           
    
    <nav>
        <div class="left">
            
            <img src="Images/Logo Adrenalina.PNG" alt="logo" height="100" width="200">
            
        </div>
        
        <div class="onglets">
            <a href="#">Home</a>
            <a href="#produits">Nos évènements</a>
            <a href="#contact">Contact</a>
        </div>
    </nav>

    <header>
        <h1>Adrenalina,</h1>
        <h4>LE MEILLEUR PARC D'ATTRACTIONS.</h4>
        <button>Parcourir</button>
    </header>
<form action="" method="POST">
        
        <h1>S'inscrire</h1>
        <table border="1" align="center">
            
            <tr>
            <td>
            <label for="idev">Numéro Event:
                        </label>
                    </td>
                    <td><input type="number" value="<?php echo $a['NumEvent'];?>" name="idev:" id="idev" ></td>

                      
                    
                    </tr>
                   
                <td>
                    <label for="id">Id Participation:
                    </label>
                </td>
                <td><input type="number" name="nom" id="nom" maxlength="20"></td>
            </tr>
           
                <td>
                    <label for="email">Adresse mail:
                    </label>
                </td>
                <td>
                    <input type="email" name="email" id="email">
                </td>
            </tr>
            
            <tr>
                <td></td>
                <td>
              
                <button class="btn _prim -fw _i"><span><a href="Succes.html?NumEvent=1"> Submit</a></span></button>
                <td><a href="sendmail.php?id=<?php echo $Event['NumEvent'] ; ?>&email='youssef.raboudi@esprit.tn' ; ?>">.</a></td>"
                </td>
                <td>
                    <input type="reset" value="Annuler" >
                </td>
                
            </tr>
        </table>
    </form>
    </html>

