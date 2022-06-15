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
            <?php 
                foreach($cates as $cate){
            ?>
            <div class="t2"></div>
            <a href="./index.php?id=<?=htmlspecialchars($cate['id']);?>"><?=htmlspecialchars($cate['libelles']);?></a>
            <?php
                }
            ?>
            <div class="t3"></div>
            
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
            <p>
                <?= htmlspecialchars($post['content']); ?>
            </p>
        </div>
    </div>

    <?php
        }
    ?>

    <footer>© 2022 Copyright</footer>
</body>
</html>