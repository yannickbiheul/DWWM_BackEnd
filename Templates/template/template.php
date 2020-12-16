<!DOCTYPE html>
<html lang="fr">
    <head>
        <title><?php echo $title ; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
    </head>

    <body>
        <header>
        <nav>
        
            <ul>
                <li><a href="index.php?page=accueil">Accueil</a></li>
                <li><a href="index.php?page=test">Test</a></li>
                <li><a href="index.php?page=about">A propos</a></li>
            </ul>

            </nav>
            <h1>Titre du site</h1>
            <p>Less is more</p>
        </header>
        <article>
            
            <?php echo $contenu ; ?>

        </article>
        <footer>
            Designed by me
        </footer>
    </body>
</html>
