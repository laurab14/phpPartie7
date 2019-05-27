<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Partie 7 Exo5</title>
    </head>
    <body>
        <form method="get" action="index.php">
            <select name="gender" id="gender">
                <option value="mr">Mr</option>
                <option value="mme">Mme</option>
            </select>
            <p><label>Votre nom : </label><input type="text" name="lastName"/></p>
            <p><label>Votre prénom : </label><input type="text" name="firstName"/></p>
            <input type="submit" value="Valider" />
        </form>
        <?php
        echo 'Civilité : ' . $_GET['gender'] . ' ' . 'Nom : ' . $_GET['lastName'] . ' ' . 'Prénom : ' . $_GET['firstName'];
        ?>
    </body>
</html>