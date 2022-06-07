<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualites</title>
    <link rel="stylesheet" href="./vue/styles.css">
</head>
<body>

    <nav>
        <h2>ACTUALITÉS POLYTECHNICIENNES</h2>
        <div class="trait"></div>
        <div id="types">
            <div class="t1"></div>
            <a href="./index.php">Accueil</a>
            <div class="t2"></div>
            <a href="./index.php?id=1">Sport</a>
            <div class="t3"></div>
            <a href="./index.php?id=2">Santé</a>
            <div class="t4"></div>
            <a href="./index.php?id=3">Education</a>
            <div class="t5"></div>
            <a href="./index.php?id=4">Politique</a>
            <div class="t6"></div>
        </div>
    </nav>

    <div id="content_parent">
        <?php
            foreach($posts as $post){
        ?>
        
        <div id="content">
            <h1>
                <?= htmlspecialchars($post['title']); ?>
            </h1>
            <h2>
                <?= htmlspecialchars($post['content']); ?>
            </h2>
        </div>
    </div>

    <?php
        }
    ?>

    <footer>© 2022 Copyright</footer>
</body>
</html>