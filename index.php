<?php
    
    $cat=$_GET["id"];

    require_once('modele/model.php');
    $posts= getPosts($cat);
    $cates=getCategorie();
    require_once('vue/nav.php');
