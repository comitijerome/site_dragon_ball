<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><?= $data->title ?></title>

    <!-- Feuille de style CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <h1>dragon ball</h1>

        <nav>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Dragon world</a></li>
                <li><a href="#">Personnages</a></li>
                <li><a href="#">Techniques</a></li>
            </ul>
        </nav>

    </header>
    <div class="container">
        <main>
            <?= $content ?>

            <p>Bienvenue sur le site de Dragon Ball !</p>
            <p>Explorez l'univers de Dragon Ball, découvrez les personnages emblématiques et leurs techniques légendaires.</p>
            <p>Rejoignez-nous pour des aventures épiques et des combats mémorables !</p>
            <p>Que la force de Dragon Ball soit avec vous !</p>
            <p>Pour toute question ou suggestion, n'hésitez pas à nous contacter.</p>

        </main>
        <aside>
            <p>Rejoignez-nous pour des aventures épiques !</p>
            <p>Que la force de Dragon Ball soit avec vous !</p>
            <p> n'hésitez pas à nous contacter.</p>
        </aside>
    </div>
    <footer>
        2025
    </footer>
</body>

</html>