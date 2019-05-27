<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Partie 7 Exo8</title>
    </head>
    <body>
        <?php
        $DisplayForm = true;
        
        if (isset($_POST['sub'])) {
            $DisplayForm = false;
            echo 'Civilité : ' . $_POST['gender'] . ' ' . 'Nom : ' . $_POST['lastName'] . ' ' . 'Prénom : ' . $_POST['firstName'] . ' nom du fichier :  ' . $_FILES['utFile']['name'];
//            print_r($_FILES); 
//            pour commenter ctrl + shift + c; permet de voir le tableau files.
                  $extensions_valides = array('pdf');
//1. strrchr renvoie l'extension avec le point (« . »).
//2. substr(chaine,1) ignore le premier caractère de chaine.
//3. strtolower met l'extension en minuscules.
            $extension_upload = strtolower(substr(strrchr($_FILES['utFile']['name'], '.'), 1));
            if (in_array($extension_upload, $extensions_valides)) {
                echo ' Extension correcte';
            } else {
                echo ' L\'extension n\'est pas du .pdf';
            }
        }
        if ($DisplayForm) {
            ?>
            <form method = "post" action = "index.php" enctype="multipart/form-data">
                <select name = "gender" id = "gender">
                    <option value = "mr">Mr</option>
                    <option value = "mme">Mme</option>
                </select>
                <p><label>Votre nom : </label><input type = "text" name = "lastName" required/></p>
                <p><label>Votre prénom : </label><input type = "text" name = "firstName" required/></p>
                <p><input type="file" name="utFile" /></p>
                <input type = "submit" name = "sub" value = "Valider" />
            </form>
            <?php
        }
        ?>


    </body>
</html>
