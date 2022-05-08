<?php
    include_once '../Model/cliennt.php';
    include_once '../Controller/clienntC.php';

    $clienntC = new clienntC();
    

    if (isset($_POST['id'] ) && isset($_POST['nom'] ) && isset($_POST['prenom'] ) && isset($_POST['Adresse'] ) && isset($_POST['Num'] )&& isset($_POST['types'] ) && isset($_POST['RIB'] ))
    {
        echo $_POST['id'] ;
            $cliennt = new cliennt($_POST['id'] , $_POST['nom'],$_POST['prenom'] , $_POST['Adresse'], $_POST['Num'],$_POST['types'], $_POST['RIB'] );
            $clienntC->modifiercliennt($cliennt);
            header('Location:affichercliennt.php');
    }else
    {
        $a = $clienntC->getclienntbyID($_GET['id']) ;
     
    }?>
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="affichercliennt.php">Retour a la liste des cliennts</a></button>
        <hr>
        <form action="" method="POST">
            <table border="1" align="center">
            <tr>
                    <td>
                        <label for="id">id client:
                        </label>
                    </td>
                    <td><input type="number" name="id" id="id" maxlength="20" value="<?php echo $a['id'];?>"  readonly></td>
                </tr>
                <tr>
                    <td>
                        <label for="nom">nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" maxlength="20" value="<?php echo $a['nom'];?>"  ></td>
                </tr>
                <tr>
                    <td>
                        <label for="prenom"> prenom:
                        </label>
                    </td>
                    <td><input type="text" name="prenom" id="prenom" maxlength="20" value="<?php echo $a['prenom'];?>"  ></td>
                </tr>
                <tr>
                    <td>
                        <label for="Adresse">Adresse:
                        </label>
                    </td>
                    <td><input type="text" name="Adresse" id="Adresse" maxlength="20" value="<?php echo $a['Adresse'];?>"  ></td>
                </tr>
                <tr>
                    <td>
                        <label for="Num">Num Tel:
                        </label>
                    </td>
                    <td><input type="number" name="Num" id="Num" maxlength="20" value="<?php echo $a['Num'];?>"  ></td>
                </tr>
                <tr>
                    <td>
                        <label for="types">types de Ticket (1:S(20dt) 2:A(25dt) 3:D):
                        </label>
                    </td>
                    <td><input type="number" name="types" id="types" maxlength="20" value="<?php echo $a['types'];?>"  ></td>
                </tr>
                <tr>
                    <td>
                        <label for="RIB">RIB:
                        </label>
                    </td>
                    <td><input type="number" name="RIB" id="RIB" maxlength="20" value="<?php echo $a['RIB'];?>"  ></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>