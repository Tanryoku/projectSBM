<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--  normalize importé de : https://github.com/necolas/normalize.css/blob/master/normalize.css -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="./css/connexionStyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap">

    <title>Connexion</title>
</head>
<body>
    <header>
        <h1>JE SUIS LE HEADER</h1>
    </header>
    <main>
    <section class="mainWindow">
            <div class="mainTitle">
                <h2>Formulaire de connexion</h2>
            </div>

            <div class="mainContent">
                
                <form action="" method="post" id="connexion-form">
                    <label for="email">Email :</label><br>
                    <input type="text" id="email" name="email" required><br>

                    <label for="password">Mot de passe :</label><br>
                    <input type="password" id="password" name="password" required><br>

                    <p>Pas de compte ?<a href="./inscription.php"> <u>Cliquez ici</u></a></p>

                    <input type="submit" value="Connexion" class="conBouton">
                </form>

        
            </div>
        </section>

    
    </main>
    <footer>
        <h1>JE SUIS LE FOOTER</h1>
    </footer>

    <script src="./js/subAndCo.js></script>

</body>
</html>


