<?php

    include('nav.php');
    $dsn='mysql:dbname=mglsi_news;host=127.0.0.1;port=7979';
    $username='root';
    $pwd='root';
    

    try{

        $bd=new PDO($dsn,$username,$pwd);
        $req=$bd->query('SELECT titre, contenu from Article where categorie =4');

        if($req==false){
            die("Erreur");
        }
    }catch (PDOException $e){
        echo $e->getMessage();
    }

    while($row=$req->fetch(PDO::FETCH_ASSOC)){
        ?><h1 style="text-align: center;"><?php echo htmlspecialchars($row['titre']); ?> </h1>
        <h2><?php echo htmlspecialchars($row['contenu']); ?></h2> <?php
    }
?>