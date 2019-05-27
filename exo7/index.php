<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Partie 7 Exo7</title>
    </head>
    <body>
        <?php
        $DisplayForm = true;
        if (isset($_POST['sub'])) {
            $DisplayForm = false;
            echo 'Civilité : ' . $_POST['gender'] . ' ' . 'Nom : ' . $_POST['lastName'] . ' ' . 'Prénom : ' . $_POST['firstName'] . ' nom du fichier :  ' . $_FILES['utFile']['name'];
//            print_r($_FILES); pour commenter ctrl + shift + c; permet de voir le tableau files.
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
