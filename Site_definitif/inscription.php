<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--  normalize importé de : https://github.com/necolas/normalize.css/blob/master/normalize.css -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="./css/connexionStyle.css">

    <title>Incription</title>
</head>
<body>
    <header>
        <h1>JE SUIS LE HEADER</h1>
    </header>
    <main>
        <section class="mainWindow">
            <div class="mainTitle">
                <h2>Formulaire d'Inscription</h2>
            </div>

            <div class="mainContent">
                <form action="#" method="post">
                
                    <label for="nom">Nom:</label>
                    <input type="text" id="nom" name="nom" required>

                    <label for="prenom">Prénom:</label>
                    <input type="text" id="prenom" name="prenom" required>

                    <label for="date_naissance">Date de Naissance:</label>
                    <input type="date" id="date_naissance" name="date_naissance" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="phone">phone:</label>
                    <input type="tel" id="phone" name="phone" required>

                    <label for="password">mot de passe:</label>
                    <input type="password" id="password" name="password" required>

                    <p>Déja un compte ?<a href="./connexion.php"> <u>Cliquez ici</u></a></p>

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


