<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Partie 7 Exo6</title>
    </head>
    <body>
        <?php
        $DisplayForm = true;
        if (isset($_POST['sub'])) {
            $DisplayForm = false;
            echo 'Civilité : ' . $_POST['gender'] . ' ' . 'Nom : ' . $_POST['lastName'] . ' ' . 'Prénom : ' . $_POST['firstName'];
        }
        if ($DisplayForm) {
            ?>
            <form method = "post" action = "index.php">
                <select name = "gender" id = "gender">
                    <option value = "mr">Mr</option>
                    <option value = "mme">Mme</option>
                </select>
                <p><label>Votre nom : </label><input type = "text" name = "lastName" required/></p>
                <p><label>Votre prénom : </label><input type = "text" name = "firstName" required/></p>
                <input type = "submit" name = "sub" value = "Valider" />
            </form>
            <?php
        }
        ?>


    </body>
</html>
