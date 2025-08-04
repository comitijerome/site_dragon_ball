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


        </main>
</body>

</html>