<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--  normalize importé de : https://github.com/necolas/normalize.css/blob/master/normalize.css -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="./css/connexionStyle.css">

    <title>Connexion</title>
</head>
<body>
    <header>
        <h1>JE SUIS LE HEADER</h1>
    </header>
    <main>
    <section class="mainWindowCo">
            <div class="mainTitle">
                <h2>Formulaire de connexion</h2>
            </div>

            <div class="mainContent">
                <form action="#" method="post">
                
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>

                    <label for="prenom">Prénom:</label>
                    <input type="text" id="prenom" name="prenom" required>
                    
                    <p>Pas de compte ?<a href="./inscription.php"> <u>Cliquez ici</u></a></p>

                    <input type="submit" value="Envoyer">
                </form>
            </div>
        </section>

    
    </main>
    <footer>
        <h1>JE SUIS LE FOOTER</h1>
    </footer>
</body>
</html>

