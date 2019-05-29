<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/style.css" />

        <title>Sondess Ben Araar</title>


    </head>

    <body>


        <header class="header">
            <h1 class="header-title">
                <a href="index.php">Sondess Ben Araar</a>
            </h1>

            <nav class="header-nav">
                <a href="index.php">accueil</a>
                <a href="curriculum%20vitae.php">curriculum vitae</a>
                <a href="formulaire.php">newsletter</a>
                <a href="contact.php">contact</a>
            </nav>
        </header>

    <title>Formulaire</title>

    <link href="assets/css/formulaire%20style.css" rel="stylesheet" />
    <script src="script.js" type="text/javascript"></script>

<body>
<main>
    <form action="#" method="post">
        <fieldset>
            <legend>
                <div class="project-title">Newsletter</legend>

            <br/>

            <p>Recevez des news étonnantes, des adresses secrètes et des idées insolites, une fois par semaine dans votre boîte mail</p>
            <div>
                <label for="nom">Nom&nbsp;</label>
                <input type="text" id="nom" name="nom" />
            </div>
            <div>
                <label for="prenom">Prénom&nbsp;</label>
                <input type="text" id="prenom" name="prenom" />
            </div>
            <div>
                <label for="mail">Mail&nbsp;</label>
                <input type="email" id="mail" name="mail" />
            </div>

            <div>
                <input type="submit" value="S'inscrire !" onclick="validerFrm()"/>
            </div>
        </fieldset>
    </form>
</main>
</body>
</html>