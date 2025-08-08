<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $data->title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
    <div id="root">
        <header id="global-layout-header">
            <h1>dragon ball</h1>
        </header>
        <nav id="global-layout-nav">
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Dragon world</a></li>
                <li><a href="#">Personnages</a></li>
                <li><a href="#">Techniques</a></li>
            </ul>
        </nav>
        <div class="container">
            <main id="global-layout-main">
                <?= $content?>
            </main>
        </div>
    </div>
</body>
</html>