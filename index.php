<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">

        <?php
        session_start();
        if (isset($_SESSION['erreur'])) {
            echo '<div class="error">' . $_SESSION['erreur'] . '</div>';
            unset($_SESSION['erreur']);
        }
        ?>

        <table border="1" width="80%">
            <form action="auth.php" method="get">
                <tr>
                    <th colspan="2">se connecter</th>
                </tr>
                <tr>
                    <th>Login:</th>
                    <th><input type="text" name="logine"></th>
                </tr>
                <tr>
                    <th>Pasword:</th>
                    <th><input type="password" name="motpasse"></th>
                </tr>
                <tr>
                    <th><input type="submit" value="OK"></th>
                    <th><input type="reset" value="Annuler"></th>
                </tr>
            </form>
        </table>

    </div>
</body>


</html>